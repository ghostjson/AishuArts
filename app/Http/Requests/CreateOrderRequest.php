<?php

namespace App\Http\Requests;

use App\Rules\PhoneRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'billing_customer_name' => 'required',
            'billing_address' => 'required',
            'billing_address_2' => 'required',
            'billing_state' => 'required',
            'billing_city' => 'required',
            'billing_pincode' => 'required',
            'billing_email' => 'required',
            'billing_phone'  => ['required', new PhoneRule()],
            'payment_method' => 'required'
        ];
    }
}
