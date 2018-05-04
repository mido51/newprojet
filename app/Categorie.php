<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  public function properties()
  {
    return $this->hasMany('App\Propertie');
  }
}
