<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function facilitie() {
        return $this->BelongsTo('App\Facilitie');
    }

    public function storeRule() {
        return $this->hasMany('App\StoreRule');
    }
}
