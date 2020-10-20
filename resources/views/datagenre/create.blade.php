@extends('template')
@section('title', 'Tambah Data Genre')
@section('content')

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">TAMBAH DATA GENRE</h3>
  </div>
  <div class="panel-body">
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
          @endforeach
      </div>
    @endif

    <form action="{{ url('datagenre')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="genre" class="control-label">Genre</label>
        <input type="text" name="genre" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop
