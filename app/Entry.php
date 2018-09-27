<?php

namespace App;

use App\Reference;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $guarded = ['id'];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }
}
