<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
  protected $table = "bahasa";
  protected $primarykey = "id";
  public $timestamps = false;
  protected $fillable = [
    'nama_bahasa'
  ];


  public function buku() {
    return $this->hasMany('App/Buku', 'id_bahasa');
  }
}
