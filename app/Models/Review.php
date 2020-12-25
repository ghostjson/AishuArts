<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed product_id
 * @property int|mixed|string|null user_id
 * @property mixed rating
 * @property mixed review
 * @method static where(string $string, $product_id)
 */
class Review extends Model
{
    use HasFactory;

    public function save(array $options = [])
    {
        $review = parent::save($options);
        $total_reviews = Review::where('product_id', $this->product_id)->get()->count();

        $avgRating = AvgRating::where('product_id', $this->product_id)->first();
        $avgRating->sum_rating += $this->rating;
        $avgRating->avg_rating = $avgRating->sum_rating / $total_reviews;

        Product::find($this->product_id)->update(['avg_rating' => $avgRating->avg_rating]);

        $avgRating->save();

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function haveHalfStar()
    {
        $int = floor($this->rating);
        return $this->rating - $int > 0;
    }
}
