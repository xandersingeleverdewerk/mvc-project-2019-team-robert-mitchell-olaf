<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function restaurantRule() {
        return $this->hasMany('App\RestaurantRule');
    }
}
