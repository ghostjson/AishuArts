<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed product_id
 * @method static create(array $array)
 * @method static where(string $string, $product_id)
 * @method static updateOrCreate(array[] $array, array[] $array)
 */
class AvgRating extends Model
{
    use HasFactory;

    protected $table = 'avg_rating';
    protected $guarded = [];
}
