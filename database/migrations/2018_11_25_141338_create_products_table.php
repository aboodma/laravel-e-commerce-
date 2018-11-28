<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name_ar');
            $table->string('product_slug_ar');
            $table->string('product_name_en');
            $table->string('product_slug_en');
            $table->string('product_name_gr');
            $table->string('product_slug_gr');
            $table->text('product_info_ar');
            $table->text('product_info_en');
            $table->text('product_info_gr');
            $table->integer('quantity');
            $table->string('price_dolar');
            $table->string('price_euro');
            $table->string('price_kron');
            $table->string('sold_price_dolar');
            $table->string('sold_price_euro');
            $table->string('sold_price_kron');
            $table->text('keywords');

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
        Schema::dropIfExists('products');
    }
}
