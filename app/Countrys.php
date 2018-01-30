<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Countrys extends Model
{
    //
    public function user() {
        RETURN $this->belongsTo('App\User');
    }
}
