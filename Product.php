<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="Products";

    public function sizes(){
        return $this->belongsTo('App\Size','product_id');
    }


}
