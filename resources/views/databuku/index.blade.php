  @extends('template')
  @section('content')

  <div class="container">
    <div class="row">
      <a href="/databukucreate" class="btn btn-primary">+ Tambah</a>
    </div>
  </div>
  <br>
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">DATA BUKU</h3>
    </div>
    @if($message = Session::get('message'))
      <div class="alert alert-success">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <form action="{{ url('cari') }}" method="GET">
        {{ @csrf_field() }}
        <div class="form-group col-md-6">
          <input type="text" name="judul" placeholder="Search..." class="form-control col-md-6">
          <br><br>
          <input type="submit" class="btn btn-info" value="Submit">
        </div>
    </form>



    @if(!empty($buku_list))
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach($buku_list as $buku)
          <tr>
            <td>{{ $i++ }}</td>
            <td><img src="{{ asset('images/'.$buku->foto1) }}" style= "width:150px"></td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>
              <a href="{{ url('showdatabuku' . $buku->id ) }}" class="btn btn-warning">Show</a>
              <a href="{{ url('editdatabuku'. $buku->id) }}" class="btn btn-success">Edit</a>
              <a href="{{ url('deletedatabuku'. $buku->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif

      <div class="pull-right">
         {{ $buku_list->links() }}
      </div>

    </div>
  </div>
  @stop
