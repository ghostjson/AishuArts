<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\URL;

/**
 * @method static create(array $validated)
 * @method static find($id)
 */
class Product extends Model
{
    use HasFactory;

    public $guarded = [];


    public function setImageAttribute(UploadedFile $file)
    {
        $this->attributes['image'] = fileUploader($file);
    }

    public function getImageAttribute($value)
    {
        return env('APP_URL') . '/storage/' . $value;
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
        }
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
