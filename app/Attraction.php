<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    //
    protected $fillable = ['waitTime', 'minAge', 'minLength'];

    public function facility() {
        return $this->belongsTo('App\Facility');
    }

    public function categorie() {
        return $this->belongsTo('App\Categorie');
    }
}
