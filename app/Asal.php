<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asal extends Model
{
  protected $table = "asal_buku";
  protected $primarykey = "id";
  public $timestamps = false;
  protected $fillable = [
    'asal'
  ];


  public function buku() {
    return $this->hasMany('App/Buku', 'id_asal');
  }
}
