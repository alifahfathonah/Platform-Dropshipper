@extends('template')
@section('content')


<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">DATA ASAL BUKU</h3>
  </div>

  <!-- @if($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
      <p>{{ $message }}</p>
    </div>
  @endif -->

  @if(!empty($asal_list))
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Asal Buku</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($asal_list as $asal)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $asal->asal }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
@stop
