<?php

namespace App\Listeners;

use App\Events\OrderDelivered;
use App\Models\CanReviews;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ReviewProductListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param OrderDelivered $event
     * @return void
     */
    public function handle(OrderDelivered $event)
    {
        $product_ids = json_decode($event->order->products);

        foreach ($product_ids as $id){
            CanReviews::create([
                'product_id' => $id,
                'user_id' => $event->order->user_id
            ]);
        }
    }
}
