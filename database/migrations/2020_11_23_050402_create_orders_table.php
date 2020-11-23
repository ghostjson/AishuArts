<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->longText('pickup_location');

            $table->string('billing_customer_name');
            $table->text('billing_address');
            $table->text('billing_address_2')->nullable();
            $table->string('billing_city');
            $table->string('billing_pincode');
            $table->string('billing_state');
            $table->string('billing_country');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_alternate_phone')->nullable();
            $table->boolean('shipping_is_billing')->default(true);
            $table->string('payment_method');
            $table->json('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
