<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Validator;
use Session;

class LoginController extends Controller
{
    public function index(){
      return view('login');
    }

    public function cek(Request $request){
      $this->validate($request,[
        'Email'=>'required',
        'Password'=>'required'
      ]);
      $proses = UserModel::where('email',$request->Email)->where('password',md5($request->Password));
      if($proses->count()>0){
        $data = $proses->first();
        Session::put('id_user',$data->id_user);
        Session::put('nama',$data->nama);
        Session::put('email',$data->email);
        Session::put('password',$data->password);
        Session::put('login_status',true);
        return redirect('dashboard');
      }else{
        Session::flash('pesan','Email dan Password tidak cocok');
        return redirect('login');
      }
    }


    public function logout(){
      Session::flush();
      return redirect('login');
    }
}
