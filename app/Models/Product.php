<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\URL;

/**
 * @method static create(array $validated)
 * @method static find($id)
 * @method static paginate(int $int)
 * @method static where(string $string, int $int)
 * @property mixed price
 * @property mixed id
 * @property mixed image1
 * @property mixed image2
 * @property mixed image3
 * @property false|mixed is_active
 */
class Product extends Model
{
    use HasFactory;

    public $guarded = [];

    public function save(array $options = [])
    {
        $product = parent::save($options);
        AvgRating::updateOrCreate(
            ['product_id' => $this->id],
            ['product_id' => $this->id]
        );

        return $product;
    }

    public function setImage1Attribute(UploadedFile $file)
    {
        $this->attributes['image1'] = fileUploader($file);
    }
    public function setImage2Attribute(UploadedFile $file)
    {
        $this->attributes['image2'] = fileUploader($file);
    }
    public function setImage3Attribute(UploadedFile $file)
    {
        $this->attributes['image3'] = fileUploader($file);
    }

    public function getImageAttribute()
    {
        return env('APP_URL') . '/storage/' . $this->image1;
    }

    public function getImagesAttribute()
    {
        $images = ['image1','image2','image3'];

        $image_urls = [];

        foreach ($images as $image){
            if(!is_null($this[$image])){
                array_push($image_urls, env('APP_URL') . '/storage/' . $this[$image]);
            }
        }

        return $image_urls;
    }

    public function getCategoryAttribute($value)
    {
        return Category::find($value)->name;
    }

    public function getLatestReviews()
    {
        return Review::where('product_id', $this->id)
            ->orderBy('created_at', 'desc')
            ->limit(20)->get();

    }

    public function canReview()
    {
        if(CanReviews::where('user_id', auth()->id())
            ->where('product_id', $this->id)->exists()
        ){
            return true;
        }else{
            return false;
        }
    }

    public function priceWithCurrency()
    {
        return settings('currency') . $this->price;
    }

    public function getRating()
    {
        $rating = Review::where('product_id', $this->id)->get()
            ->avg('rating');
        return is_null($rating) ? 0 : $rating;
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function isBought()
    {
        $orders = Order::where('user_id', '=', auth()->id())
            ->get();

        $products = [];
        foreach ($orders as $order){
            $products = $products + json_decode($order->products);
        }

        foreach ($products as $product){
            if($product === $this->id){
                return true;
            }
        }

        return false;

    }

}
