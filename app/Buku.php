<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  protected $table = "buku";
  protected $primarykey = "id";
  public $timestamps = false;
  protected $fillable = [
    'judul',
    'foto1',
    'foto2',
    'foto3',
    'pengarang',
    'penerbit',
    'id_genre',
    'id_bahasa',
    'stok',
    'kondisi',
    'id_asal',
    'berat',
    'harga',
    'sinopsis'
  ];


  public function genre() {
    return $this->belongsTo('App\Genre', 'id_genre');
  }

  public function bahasa() {
    return $this->belongsTo('App\Bahasa', 'id_bahasa');
  }

  public function asal() {
    return $this->belongsTo('App\Asal', 'id_asal');
  }

}
