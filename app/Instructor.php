<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{

  public function sectionz()
  {
    //return Section::where('id', $this->section_id)->first()->name;
    return $this->hasMany('App\Section');
  }


}
