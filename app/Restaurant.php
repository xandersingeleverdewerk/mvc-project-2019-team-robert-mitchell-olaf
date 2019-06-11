<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function facilitie() {
        return $this->BelongsTo('App\Facilitie');
    }

    public function restaurantRule() {
        return $this->hasMany('App\RestaurantRule');
    }
}
