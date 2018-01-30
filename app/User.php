<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Countrys;
use App\Article;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function country() {
        return $this->hasOne('App\Countrys');
    }
    public function articles() {
        return $this->hasMany('App\Article');
    }

    public function role() {
        return $this->belongsToMany('App\Role');
    }

}
