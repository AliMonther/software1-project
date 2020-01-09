<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public $table = "customers";
    public function products()
    {
        return $this->belongsToMany('App/Product');
    }
}
