<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('shiping_id');
            $table->unsignedInteger('payment_id');
            $table->unsignedInteger('coupon_id')->nullable();
            $table->unsignedInteger('is_paied');
            $table->unsignedInteger('is_complete');
            $table->unsignedInteger('is_delete');
            $table->unsignedInteger('is_canceled');
            $table->longText('note');
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
