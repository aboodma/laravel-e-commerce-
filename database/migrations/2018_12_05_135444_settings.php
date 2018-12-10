<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('settings', function (Blueprint $table) {
          $table->increments('id');
          $table->mediumText('site_name_en');
          $table->mediumText('site_name_gr');
          $table->mediumText('site_name_ar');
          $table->mediumText('logo');
          $table->mediumText('keywords_ar');
          $table->mediumText('keywords_gr');
          $table->mediumText('keywords_en');
          $table->mediumText('description_ar');
          $table->mediumText('description_gr');
          $table->mediumText('description_en');
          $table->mediumText('adress_ar');
          $table->mediumText('adress_gr');
          $table->mediumText('adress_en');
          $table->mediumText('mail');
          $table->mediumText('phone');
          $table->mediumText('facebook');
          $table->mediumText('instagram');
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
        //
    }
}
