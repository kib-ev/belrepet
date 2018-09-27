<?php

namespace App;

use App\Entry;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    public function entries()
    {
       return $this->hasMany(Entry::class);
    }
}
