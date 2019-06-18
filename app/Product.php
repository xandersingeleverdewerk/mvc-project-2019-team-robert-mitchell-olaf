<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function storeRule() {
        return $this->hasMany('App\StoreRule');
    }
}
