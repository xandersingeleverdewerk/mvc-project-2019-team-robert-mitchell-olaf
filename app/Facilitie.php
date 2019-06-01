<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    public function restaurant() {
        return $this->hasMany('App\Restaurant');
    }

    public function attraction() {
        return $this->hasMany('App\Attraction');
    }
}
