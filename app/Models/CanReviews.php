<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanReviews extends Model
{
    use HasFactory;

    protected $table = 'can_reviews';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function removePermissionToReview(int $product_id, int $user_id)
    {
        $can_reviews = CanReviews::where('product_id', $product_id)
            ->where('user_id', $user_id)->delete();
    }
}
