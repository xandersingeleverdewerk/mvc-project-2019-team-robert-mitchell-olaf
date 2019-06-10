<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantRule extends Model
{
    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }

    public function dish() {
        return $this->belongsTo('App\Dish');
    }
}
