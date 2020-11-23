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
                'key' => 'shiprock-token',
                'value' => 'initial-key'
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
