<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
  protected $table = "user";
  protected $primarykey = "id";
  public $timestamps = false;
  protected $fillable = [
    'nama',
    'status',
    'email',
    'password'
  ];
}
