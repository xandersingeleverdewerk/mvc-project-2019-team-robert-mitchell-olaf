<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    public function restaurant() {
        return $this->hasOne('App\Restaurant');
    }
}
