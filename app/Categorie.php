<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function attraction() {
        return $this->hasMany('App\attraction');
    }
}
