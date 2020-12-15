<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentSucessHook extends FormRequest
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
            'orderId' => 'required',
            'orderAmount' => 'required',
            'referenceId' => 'required',
            'txStatus' => 'required',
            'paymentMode' => 'required',
            'txMsg' => 'required',
            'txTime' => 'required',
            'signature' => 'required',
        ];
    }
}
