<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Session;
use Alert;
use Validator;

class GenreController extends Controller
{
  public function datagenre(){
    $halaman = 'datagenre';
    $genre_list = Genre::all();
    return view('datagenre.index', compact('halaman','genre_list'));
  }

  public function create(){
    $halaman = 'datagenre';
    return view('datagenre.create', compact('halaman'));
  }

  public function store(Request $request){
    $this->validate($request,
    [
      'nama_genre' => 'required'
    ]
  );

    Genre::create([
      'nama_genre' => $request->nama_genre

    ]);
    return redirect('datagenre')->with('message','Tambah Data Berhasil!');
  }

  public function edit($id){
    $halaman = 'datagenre';
    $genre = Genre::findOrFail($id);
    return view('datagenre.edit', compact('halaman', 'genre'));
  }

  public function update($id, Request $request){
    $this->validate($request,
    [
      'name_genre' => 'required'
    ]
  );
    $halaman = 'datagenre';
    $genre = Genre::findOrFail($id);
    $genre->nama_genre = $request->nama_genre;
    $genre->save();
    return redirect('databuku')->with('message','Update Data Berhasil!');;
  }

  public function delete($id){
    $genre = Genre::findOrFail($id);
    $genre->delete();
    return redirect('datagenre');
  }

}
