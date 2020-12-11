<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function updatePaymentCredentials(UpdatePaymentRequest $request)
    {
        try{
            $credentials = $request->validated();
            settingsUpdate('cashfree-secret-key', $credentials['cashfree-secret-key']);
            settingsUpdate('cashfree-app-id', $credentials['cashfree-app-id']);

            return redirect()->back()->with('Successfully updated');
        }catch (\Exception $exception)
        {
            Log::error($exception);
            return redirect()->back()->withErrors('Error in updating');
        }

    }
}
