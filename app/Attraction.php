<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    //
    protected $fillable = ['waitTime', 'minAge', 'minLength'];

    public function facilitie() {
        return $this->belongsTo('App\Facilitie');
    }

    public function category() {
        return $this->belongsTo('App\Categorie');
    }
}
