<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  public function issues()
  {
      return $this->hasMany('App\Issue');
  }
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
}
