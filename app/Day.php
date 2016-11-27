<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function classes()
    {
      return $this->belongsToMany('Day');
    }
}
