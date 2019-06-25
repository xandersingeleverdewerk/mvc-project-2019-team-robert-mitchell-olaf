<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function attraction() {
        return $this->hasMany('App\Attraction');
    }
}
