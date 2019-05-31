<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function facility() {
        return $this->BelongsTo('App\facility');
    }
}
