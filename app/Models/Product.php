<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

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

}
