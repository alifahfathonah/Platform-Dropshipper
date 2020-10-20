<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asal;
use Session;
use Alert;
use Validator;

class AsalController extends Controller
{
  public function dataasal(){
    $halaman = 'dataasal';
    $asal_list = Asal::all();
    return view('dataasal.index', compact('halaman','asal_list'));
  }

}
