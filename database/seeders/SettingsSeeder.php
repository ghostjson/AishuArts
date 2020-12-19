<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'shiprocket-email',
                'value' => 'imakhilravindran@gmail.com'
            ],
            [
                'key' => 'shiprocket-password',
                'value' => '17291234'
            ],
            [
                'key' => 'shiprocket-token',
                'value' => 'initial-key'
            ],
            [
                'key' => 'shiprocket-api-endpoint',
                'value' => 'https://apiv2.shiprocket.in/v1/external/'
            ],
            [
                'key' => 'shiprocket-pickup-location',
                'value' => 'pickup'
            ],
            [
                'key' => 'cashfree-secret-key',
                'value' => 'fb31aa1c284b42021e54394321c919f78560342b'
            ],
            [
                'key' => 'cashfree-app-id',
                'value' => '4559347901cf8f4596b981ba739554'
            ],
            [
                'key' => 'currency',
                'value' => '₹'
            ]
        ];

        $this->feedSettings($settings);
    }

    private function feedSettings(array $settings)
    {
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
