<?php

namespace App\Modules;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class ShiprocketAPI{

    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => settings('shiprocket-api-endpoint')]);
    }

    public function refreshToken($email, $password)
    {
        try {
            $request = $this->client->post('auth/login', [
                'form_params' => [
                    'email' => $email,
                    'password' => $password
                ]
            ]);
            $response = $request->getBody()->getContents();
            $token = (json_decode($response))->token;

            settingsUpdate('shiprocket-token', $token);

        } catch (GuzzleException $e) {
            Log::error($e);
        }
    }

}
