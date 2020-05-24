<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function lieu(){
        return $this->belongsTo('App\Lieu');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
