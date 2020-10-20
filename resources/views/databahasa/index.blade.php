@extends('template')
@section('content')

<div class="container">
  <div class="row">
    <a href="/databahasacreate" class="btn btn-primary">+ Tambah</a>
  </div>
</div>
<br>
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">DATA BAHASA</h3>
  </div>
  @if($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
      <p>{{ $message }}</p>
    </div>
  @endif
  @if(!empty($bahasa_list))
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Bahasa</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($bahasa_list as $bahasa)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $bahasa->nama_bahasa }}</td>
          <td>
            <a href="{{ url('editdatabahasa'. $bahasa->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ url('deletedatabahasa'. $bahasa->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
@stop
