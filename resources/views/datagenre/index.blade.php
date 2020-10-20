@extends('template')
@section('content')

<div class="container">
  <div class="row">
    <a href="/datagenrecreate" class="btn btn-primary">+ Tambah</a>
  </div>
</div>
<br>
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">DATA GENRE</h3>
  </div>
  @if($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
      <p>{{ $message }}</p>
    </div>
  @endif

  @if(!empty($genre_list))
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Genre</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($genre_list as $genre)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $genre->nama_genre }}</td>
          <td>
            <a href="{{ url('editdatagenre'. $genre->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ url('deletedatagenre'. $genre->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
@stop
