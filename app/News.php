<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];
    protected $table = 'news';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function link() {
        return route('public_news_item', $this->slug);
    }

    public function date() {
       return date('d.m.Y', strtotime($this->created_at));
    }
}
