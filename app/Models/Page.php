<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, string $name)
 */
class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getPage(string $name)
    {
        return Page::where('name', $name)->first();
    }

    public function getContentAttribute()
    {
        return json_decode($this->attributes['content']);
    }
}
