<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Propertie extends Model
{
  public function photos()
      {
          return $this->hasMany('App\Photo');
      }

  public function user(){

    return $this->belongsTo('App\User');

  }
  public function categorie(){

    return $this->belongsTo('App\Categorie');

  }
  public function transaction(){

  return $this->belongsTo('App\Transaction');

  }

  public function location(){

  return $this->belongsTo('App\Location');

  }
  protected $fillable = [
      'nom', 'prenom', 'email',

      'telephone','categorie_id',

      'transaction_id','titre_bien',

      'prix','surface','nombre_piece',

      'nombre_bain','garages','description',

      'user_id','address_bien','location_id','image'
    ];


}
