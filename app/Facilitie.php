<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{

    protected $table='facilities';

    protected $primaryKey='id';

    protected $fillable=['name, description, opening_time, closing_time'];

    public function restaurant() {
        return $this->hasOne('App\Restaurant');
    }

    public function store() {
        return $this->hasOne('App\Store');
    }

    public function attraction() {
        return $this->hasOne('App\Attraction');
    }

    public function review() {
        return $this->hasMany('App\Review');
    }
}
