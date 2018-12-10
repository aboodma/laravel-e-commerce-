<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShipEdit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('shipping_companies', function (Blueprint $table) {
        $table->unsignedInteger('price_dolar');
        $table->unsignedInteger('price_euro');
        $table->unsignedInteger('price_kron');
        $table->string('name_ar');
          $table->string('name_gr');


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
