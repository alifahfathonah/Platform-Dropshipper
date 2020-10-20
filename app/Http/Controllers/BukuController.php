<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Genre;
use App\Asal;
use App\Bahasa;
use Auth;
use Session;
use Alert;
use Validator;

class BukuController extends Controller
{
  public function cari(Request $request){
      $judul = $request->judul;
      $buku_list = Buku::where('judul','like',"%".$judul."%")->paginate(10);
      return view('databuku.index',compact('buku_list'));
    }

  public function databuku(){
    $halaman = 'databuku';
    $buku_list = Buku::orderBy('id')->paginate(30);
    return view('databuku.index', compact('halaman','buku_list'));
  }

  public function create(){
    $halaman = 'databuku';
    $genre = Genre::all();
    $bahasa = Bahasa::all();
    $asal = Asal::all();
    return view('databuku.create', compact('halaman','genre', 'bahasa', 'asal'));
  }

  public function store(Request $request){
    $this->validate($request,
    [
      'judul' => 'required',
      'foto1' => 'required|image|mimes:jpg,png,jpeg',
      'foto2' => 'required|image|mimes:jpg,png,jpeg',
      'foto3' => 'required|image|mimes:jpg,png,jpeg',
      'pengarang' => 'required',
      'penerbit' => 'required',
      'id_genre' => 'required',
      'id_bahasa' => 'required',
      'stok' => 'required',
      'kondisi' => 'required',
      'id_asal' => 'required',
      'berat' => 'required',
      'harga' => 'required',
      'sinopsis' => 'required'
    ]
  );
    $foto1 = $request->file('foto1');
    $name_file1 = time()."_".$foto1->getClientOriginalName();
    $tujuan_upload = 'images';
    $foto1->move($tujuan_upload, $name_file1);

    $foto2 = $request->file('foto2');
    $name_file2 = time()."_".$foto2->getClientOriginalName();
    $tujuan_upload = 'images';
    $foto2->move($tujuan_upload, $name_file2);

    $foto3 = $request->file('foto3');
    $name_file3 = time()."_".$foto3->getClientOriginalName();
    $tujuan_upload = 'images';
    $foto3->move($tujuan_upload, $name_file3);

    Buku::create([
      'judul' => $request->judul,
      'foto1' => $name_file1,
      'foto2' => $name_file2,
      'foto3' => $name_file3,
      'pengarang' => $request->pengarang,
      'penerbit' => $request->penerbit,
      'id_genre' => $request->id_genre,
      'id_bahasa' => $request->id_bahasa,
      'stok' => $request->stok,
      'kondisi' => $request->kondisi,
      'id_asal' => $request->id_asal,
      'berat' => $request->berat,
      'harga' => $request->harga,
      'sinopsis' => $request->sinopsis

    ]);
      return redirect('databuku')->with('message','Tambah Data Berhasil!');
  }

  public function show($id){
    $halaman = 'databuku';
    $buku = Buku::findOrFail($id);
    return view('databuku.show', compact('buku'));
  }

  public function edit($id){
    $halaman = 'databuku';
    $buku = Buku::findOrFail($id);
    $genre = Genre::all();
    $bahasa = Bahasa::all();
    $asal = Asal::all();
    return view('databuku.edit', compact('halaman', 'buku', 'genre', 'bahasa', 'asal'));
  }

  public function update($id, Request $request){
    $this->validate($request,
    [
      'judul' => 'required',
      'foto1' => 'required|image|mimes:jpg,png,jpeg',
      'foto2' => 'required|image|mimes:jpg,png,jpeg',
      'foto3' => 'required|image|mimes:jpg,png,jpeg',
      'pengarang' => 'required',
      'penerbit' => 'required',
      'id_genre' => 'required',
      'id_bahasa' => 'required',
      'stok' => 'required',
      'kondisi' => 'required',
      'id_asal' => 'required',
      'berat' => 'required',
      'harga' => 'required',
      'sinopsis' => 'required'
    ]
  );
    $halaman = 'databuku';
    $buku = Buku::findOrFail($id);

    $buku->judul = $request->judul;
    if($request->hasFile('foto1')){
      $request->file('foto1')->move('images/', $request->file('foto1')->getClientOriginalName());
      $buku->foto1 = $request->file('foto1')->getClientOriginalName();
      $buku->save();
    }

    if($request->hasFile('foto2')){
      $request->file('foto2')->move('images/', $request->file('foto2')->getClientOriginalName());
      $buku->foto2 = $request->file('foto2')->getClientOriginalName();
      $buku->save();
    }

    if($request->hasFile('foto3')){
      $request->file('foto3')->move('images/', $request->file('foto3')->getClientOriginalName());
      $buku->foto3 = $request->file('foto3')->getClientOriginalName();
      $buku->save();
    }

    $buku->pengarang = $request->pengarang;
    $buku->penerbit = $request->penerbit;
    $buku->id_genre = $request->id_genre;
    $buku->id_bahasa = $request->id_bahasa;
    $buku->stok = $request->stok;
    $buku->kondisi = $request->kondisi;
    $buku->id_asal = $request->id_asal;
    $buku->berat = $request->berat;
    $buku->harga = $request->harga;
    $buku->sinopsis = $request->sinopsis;
    $buku->save();
    return redirect('databuku')->with('message','Update Data Berhasil!');;
  }

  public function delete($id){
    $buku = Buku::findOrFail($id);
    $buku->delete();
    return redirect('databuku')->with('message','Delete Data Berhasil!');
  }



}
