<?php

namespace App\Console\Commands;

use App\Models\WebsiteStatistics;
use Illuminate\Console\Command;

class StatisticsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statistics:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Website Statistics';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $traffic_prev = WebsiteStatistics::where('name', 'traffic_previous_month')->first();
        $traffic_cur = WebsiteStatistics::where('name', 'traffic_current_month')->first();

        $traffic_prev->value = $traffic_cur->value;
        $traffic_cur->value = 0;

        $traffic_cur->save();
        $traffic_prev->save();

    }
}
