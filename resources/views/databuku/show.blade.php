@extends('template')
@section('content')

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">DATA BUKU</h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">
      <tr>
        <th>Image</th>
        <td>
          <img src="{{ asset('images/'.$buku->foto1) }}" style= "width:150px">&nbsp;&nbsp;&nbsp;
          <img src="{{ asset('images/'.$buku->foto2) }}" style= "width:150px">&nbsp;&nbsp;&nbsp;
          <img src="{{ asset('images/'.$buku->foto3) }}" style= "width:150px">
        </td>
      </tr>
      <tr>
        <th>Judul</th>
        <td>{{ $buku->judul }}</td>
      </tr>
      <tr>
        <th>Pengarang</th>
        <td>{{ $buku->pengarang }}</td>
      </tr>
      <tr>
        <th>Penerbit</th>
        <td>{{ $buku->penerbit }}</td>
      </tr>
      <tr>
        <th>Genre</th>
        <td>{{ $buku->genre->nama_genre }}</td>
      </tr>
      <tr>
        <th>Bahasa</th>
        <td>{{ $buku->bahasa->nama_bahasa }}</td>
      </tr>
      <tr>
        <th>Asal Buku</th>
        <td>{{ $buku->asal->asal }}</td>
      </tr>
      <tr>
        <th>Kondisi</th>
        <td>{{ $buku->kondisi }}</td>
      </tr>
      <tr>
        <th>Stok Buku</th>
        <td>{{ $buku->stok }}</td>
      </tr>
      <tr>
        <th>Berat (gr)</th>
        <td>{{ $buku->berat }}</td>
      </tr>
      <tr>
        <th>Harga</th>
        <td>Rp {{ $buku->harga }},-</td>
      </tr>
      <tr>
        <th>Sinopsis</th>
        <td>{{ $buku->sinopsis }}</td>
      </tr>

    </table>
  </div>
</div>
@stop
