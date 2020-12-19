<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed product_id
 * @property int|mixed|string|null user_id
 * @property mixed rating
 * @property mixed review
 */
class Review extends Model
{
    use HasFactory;

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
