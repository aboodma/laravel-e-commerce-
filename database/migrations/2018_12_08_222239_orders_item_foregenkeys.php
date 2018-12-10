<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersItemForegenkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('order_items', function (Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products');
        $table->foreign('order_id')->references('id')->on('orders');
        $table->foreign('size_id')->references('size_id')->on('sizes');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
