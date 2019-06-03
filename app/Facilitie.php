<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    public function restaurant() {
        return $this->hasOne('App\Restaurant');
    }

    public function store() {
        return $this->hasOne('App\Store');
    }

    public function attraction() {
        return $this->hasMany('App\Attraction');
    }
}
