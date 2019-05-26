<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    //
    protected $fillable = ['waitTime', 'minAge', 'minLength'];
}
