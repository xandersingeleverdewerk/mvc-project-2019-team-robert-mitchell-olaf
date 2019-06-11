<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreRule extends Model
{
    //
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function store(){
        return $this->belongsTo('App\Store');
    }
}
