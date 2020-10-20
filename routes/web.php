<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  Route::get('/welcome', function () {
      return view('welcome');
  });

  Route::get('/registercreate', 'UserController@create');

  Route::post('/register', 'UserController@store');

  Route::get('/login','LoginController@index');

  Route::post('/login/cek','LoginController@cek');

  Route::get('dashboard','DashController@index');

  Route::get('/logout','LoginController@logout');

  // Route::group(['middleware'=>'cek_login'], function(){
  //   if(Session::get('login_status')=="admin"){
  //
  //   }
  // });



  // // buku
  Route::get('/cari','BukuController@cari');
  //
  Route::get('/databuku', 'BukuController@databuku');
  //
  Route::get('/databukucreate', 'BukuController@create');
  // //
  Route::post('/postdatabuku', 'BukuController@store');
  // // //
  Route::get('/showdatabuku{buku}', 'BukuController@show');
  // //
  Route::get('/editdatabuku{buku}', 'BukuController@edit');
  //
  Route::post('/updatedatabuku{buku}', 'BukuController@update');
  // //
  Route::get('/deletedatabuku{buku}', 'BukuController@delete');


  // // genre
  Route::get('/datagenre', 'GenreController@datagenre');
  //
  Route::get('/datagenrecreate', 'GenreController@create');
  // //
  Route::post('/postdatagenre', 'GenreController@store');
  // //
  // Route::get('/editdatadvd{dvd}', 'DvdController@edit');
  // //
  // Route::post('/updatedatadvd{dvd}', 'DvdController@update');
  // //
  // Route::get('/deletedatadvd{dvd}', 'DvdController@delete');


  // // bahasa
  Route::get('/databahasa', 'BahasaController@databahasa');
  //
  Route::get('/databahasacreate', 'BahasaController@create');
  // //
  Route::post('/postdatabahasa', 'BahasaController@store');
  // //
  // Route::get('/editdatadvd{dvd}', 'DvdController@edit');
  // //
  // Route::post('/updatedatadvd{dvd}', 'DvdController@update');
  // //
  Route::get('/deletedatabahasa{bahasa}', 'BahasaController@delete');


  // // asal
  Route::get('/dataasal', 'AsalController@dataasal');
