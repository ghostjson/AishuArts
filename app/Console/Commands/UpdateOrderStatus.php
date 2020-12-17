<?php

namespace App\Console\Commands;

use App\Modules\ShiprocketAPI;
use Illuminate\Console\Command;

class UpdateOrderStatus extends Command
{
    /**
     * Update order status.
     *
     * @var string
     */
    protected $signature = 'orders:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update order status';

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
        $shiprocketAPI->updateOrdersStatus();
    }
}
