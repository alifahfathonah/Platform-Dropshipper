@extends('template')
@section('title', 'Update Data Buku')
@section('content')

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">UPDATE DATA BUKU</h3>
  </div>
  <div class="panel-body">
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
          @endforeach
      </div>
    @endif

    <form action="{{ url('updatedatabuku'. $buku->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="judul" class="control-label">Judul</label>
        <input type="text" name="judul" value="{{$buku->judul}}" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="foto1" class="control-label">Foto 1</label>
        <input type="file" name="foto1" id="foto1" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="foto2" class="control-label">Foto 2</label>
        <input type="file" name="foto2" id="foto2" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="foto3" class="control-label">Foto 3</label>
        <input type="file" name="foto3" id="foto3" class="form-control">
      </div>

      <div class="form-group col-md-6">
        <label for="pengarang" class="control-label">Pengarang</label>
        <input type="text" name="pengarang" class="form-control" value="{{$buku->pengarang}}">
      </div>

      <div class="form-group col-md-6">
        <label for="penerbit" class="control-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value="{{$buku->penerbit}}">
      </div>

      <div class="form-group col-md-4">
        <label for="id_genre" class="control-label">Genre</label>
        @if(!empty($genre))
        <select class="form-control" name="id_genre">
          @foreach ($genre as $g)
          <option value="{{$g->id}}">{{$g->nama_genre}}</option>
          @endforeach
          <?php $variable ?>
        </select>
        @else
          <p>Tidak ada data genre</p>
        @endif
      </div>


      <div class="form-group col-md-4">
        <label for="id_bahasa" class="control-label">Bahasa</label>
        @if(!empty($bahasa))
        <select class="form-control" name="id_bahasa">
          @foreach ($bahasa as $b)
          <option value="{{$b->id}}">{{$b->nama_bahasa}}</option>
          @endforeach
          <?php $variable ?>
        </select>
        @else
          <p>Tidak ada data bahasa</p>
        @endif
      </div>


      <div class="form-group col-md-4">
        <label for="id_asal" class="control-label">Asal Buku</label>
        @if(!empty($asal))
        <select class="form-control" name="id_asal">
          @foreach ($asal as $a)
          <option value="{{$a->id}}">{{$a->asal}}</option>
          @endforeach
          <?php $variable ?>
        </select>
        @else
          <p>Tidak ada data asal</p>
        @endif
      </div>

      <div class="form-group">
        <label for="kondisi" class="control-label">Kondisi</label>
        <input type="text" name="kondisi" value="{{$buku->kondisi}}" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="stok" class="control-label">Stok</label>
        <input type="number" name="stok" value="{{$buku->stok}}" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="berat" class="control-label">Berat (gr)</label>
        <input type="number" name="berat" value="{{$buku->berat}}" class="form-control">
      </div>

      <div class="form-group col-md-4">
        <label for="harga" class="control-label">Harga</label>
        <input type="number" name="harga" value="{{$buku->harga}}" class="form-control">
      </div>

      <div class="form-group">
        <label for="sinopsis" class="control-label">Sinopsis</label>
        <textarea name="sinopsis" class="form-control" rows="8" cols="80">{{$buku->sinopsis}}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop
