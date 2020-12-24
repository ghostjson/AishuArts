<?php

namespace Database\Seeders;

use App\Models\WebsiteStatistics;
use Illuminate\Database\Seeder;

class WebsiteStatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $traffic_prev = new WebsiteStatistics();
        $traffic_prev->name = 'traffic_previous_month';
        $traffic_prev->value = 0;
        $traffic_prev->save();

        $traffic_cur = new WebsiteStatistics();
        $traffic_cur->name = 'traffic_current_month';
        $traffic_cur->value = 0;
        $traffic_cur->save();
    }
}
