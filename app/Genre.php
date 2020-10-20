<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $table = "genre";
  protected $primarykey = "id";
  public $timestamps = false;
  protected $fillable = [
    'nama_genre'
  ];


  public function buku() {
    return $this->hasMany('App/Buku', 'id_genre');
  }

}
