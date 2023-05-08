@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">  
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Stationay_Item</a></li>
    <li class="breadcrumb-item active" aria-current="page">Stationay_Item </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Stationay_Item </h6>
      <a href="{{url('admin/stationary/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Items</th>
                <th>Specification</th>
                <th>Qty</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($stat as $key=> $sta)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $sta->item }}</td>
               <td>{{ $sta->specification }}</td>
               <td>{{ $sta->qty }}</td>
               <td>
                  <a href="{{url('delete_stationary/'.$sta->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_stationary/'.$sta->id)}}" class="btn btn-info">Edit</a>
               </td>
              </tr> 
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
