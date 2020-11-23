<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $key)
 */
class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];
}
