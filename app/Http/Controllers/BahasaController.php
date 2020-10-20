<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahasa;
use Session;
use Alert;
use Validator;

class BahasaController extends Controller
{
  public function databahasa(){
    $halaman = 'databahasa';
    $bahasa_list = Bahasa::all();
    return view('databahasa.index', compact('halaman','bahasa_list'));
  }

  public function create(){
    $halaman = 'databahasa';
    return view('databahasa.create', compact('halaman'));
  }

  public function store(Request $request){
    $this->validate($request,
    [
      'nama_bahasa' => 'required'
    ]
  );

    Bahasa::create([
      'nama_bahasa' => $request->nama_bahasa

    ]);
    return redirect('databahasa')->with('message','Tambah Data Berhasil!');
  }

  // public function edit($id){
  //   $halaman = 'datagenre';
  //   $genre = Genre::findOrFail($id);
  //   return view('datagenre.edit', compact('halaman', 'genre'));
  // }
  //
  // public function update($id, Request $request){
  //   $this->validate($request,
  //   [
  //     'name_genre' => 'required'
  //   ]
  // );
  //   $halaman = 'datagenre';
  //   $genre = Genre::findOrFail($id);
  //   $genre->nama_genre = $request->nama_genre;
  //   $genre->save();
  //   return redirect('databuku')->with('message','Update Data Berhasil!');;
  // }

  public function delete($id){
    $bahasa = Bahasa::findOrFail($id);
    $bahasa->delete();
    return redirect('databahasa');
  }
}
