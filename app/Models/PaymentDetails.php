<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated)
 * @method static updateOrCreate(array $array, array $array1)
 */
class PaymentDetails extends Model
{
    use HasFactory;

    protected $table = 'payment_details';

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
