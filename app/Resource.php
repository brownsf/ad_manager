<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }
}
