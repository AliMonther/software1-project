<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $table = "products" ;

    public function feedback()
    {
        return $this->hasOne('App\Feedback');
    }

    public function customers()
    {
        return $this->belongsToMany('App/Customer');
    }
}
