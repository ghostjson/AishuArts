<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateShiprocketRequest;
use App\Models\Setting;
use App\Modules\ShiprocketAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShippingController extends Controller
{
    private $shiprocketApi;

    public function __constructor()
    {

    }

    public function updateShiprocketCredential(UpdateShiprocketRequest $request, ShiprocketAPI $shiprocketAPI)
    {
        try{
            $credentials = $request->validated();
            settingsUpdate('shiprocket-email', $credentials['email']);
            settingsUpdate('shiprocket-password', $credentials['password']);

            $shiprocketAPI->refreshToken(settings('shiprocket-email'), settings('shiprocket-password'));

            return redirect()->back()->with('Successfully updated');
        }catch (\Exception $exception)
        {
            Log::error($exception);
            return redirect()->back()->withErrors('Error in updating');
        }

    }

    public function refreshShiprocketToken(ShiprocketAPI $shiprocketAPI)
    {
        $shiprocketAPI->refreshToken(settings('shiprocket-email'), settings('shiprocket-password'));
        return redirect()->back();
    }
}
