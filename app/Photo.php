<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

  public function propertie()
  {
    return $this->belongsTo('App/Propertie');
  }
  protected $fillable = [
      'nom_image', 'propertie_id'
    ];
}
