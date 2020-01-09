<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    public $table = "feedbacks" ;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
