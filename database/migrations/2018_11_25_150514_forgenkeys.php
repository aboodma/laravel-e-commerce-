<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Forgenkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub__categories', function (Blueprint $table) {
            $table->unsignedInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('sizes', function (Blueprint $table) {
            $table->unsignedInteger('product_id');

            $table->foreign('product_id')->references('product_id')->on('products');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('main_category_id');

            $table->foreign('main_category_id')->references('id')->on('categories');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('sub_category_id');

            $table->foreign('sub_category_id')->references('id')->on('sub__categories');
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
