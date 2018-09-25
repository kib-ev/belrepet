<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];
    protected $table = 'news';


    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
