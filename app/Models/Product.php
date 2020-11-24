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

    public function getPriceAttribute($value)
    {
        return '₹' . $value;
    }

}
