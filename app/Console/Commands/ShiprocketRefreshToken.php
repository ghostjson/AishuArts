<?php

namespace App\Console\Commands;

use App\Modules\ShiprocketAPI;
use Illuminate\Console\Command;

class ShiprocketRefreshToken extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shiprocket:refresh_token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @param ShiprocketAPI $shiprocketAPI
     * @return void
     */
    public function handle(ShiprocketAPI $shiprocketAPI)
    {
        $shiprocketAPI->refreshToken(settings('shiprocket-email'), settings('shiprocket-password'));
    }
}
