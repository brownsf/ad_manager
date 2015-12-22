<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

  public function clients()
  {
      return $this->hasMany('App\Client');
  }

}
