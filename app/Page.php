<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $incrementing = FALSE;

    public $timestamps = FALSE;
}
