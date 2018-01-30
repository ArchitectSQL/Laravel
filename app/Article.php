<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Article extends Model
{
    //
    use SoftDeletes;
    //protected $table = 'articles';
    protected $primaryKey = 'id';
    public $incrementing = TRUE;

    public $timestamps = TRUE;



    protected $fillable = ['name','text','img']; // доступные для записи

    protected $guarded = ['*'];

    protected $dates = ['deleted_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
