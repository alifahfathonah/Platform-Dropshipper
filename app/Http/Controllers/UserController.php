<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Session;
use Alert;
use Validator;

class UserController extends Controller
{

  public function create(){
    $halaman = 'register';
    return view('registrasi', compact('halaman'));
  }

  public function store(Request $request){
    $this->validate($request,
    [
      'nama'=>'required',
      'status'=>'required',
      'email'=>'required',
      'password'=>'required'
    ]
  );

    UserModel::create([
      'nama' => $request->nama,
      'status' => $request->status,
      'email' => $request->email,
      'password' => md5($request->password)
    ]);
    return redirect('dashboard')->with('message','Register Berhasil!');
  }
}
