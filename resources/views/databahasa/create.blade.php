@extends('template')
@section('title', 'Tambah Data Bahasa')
@section('content')

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">TAMBAH DATA BAHASA</h3>
  </div>
  <div class="panel-body">
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
          @endforeach
      </div>
    @endif

    <form action="{{ url('postdatabahasa')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="nama_bahasa" class="control-label">Bahasa</label>
        <input type="text" name="nama_bahasa" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop
