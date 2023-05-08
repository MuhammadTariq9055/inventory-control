@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">  
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Consumable_Item</a></li>
    <li class="breadcrumb-item active" aria-current="page">Consumable_Item </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Consumable_Item </h6>
      <a href="{{url('admin/consumable/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Name Of Item</th>
                <th>Specification</th>
                <th>Bal Per-Stock Reg</th>
                <th>Page-No</th>
                <th>Phy-Found</th>
                <th>Short-Item</th>
                <th>Excess-Item</th>
                <th>Remark</th>
                <th>Batch</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($consum as $key=> $con)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $con->item_name }}</td>
               <td>{{ $con->specification }}</td>
               <td>{{ $con->bal_per_register }}</td>
               <td>{{ $con->page_no }}</td>
               <td>{{ $con->phy_found }}</td>
               <td>{{ $con->short_item }}</td>
               <td>{{ $con->excess_item }}</td>
               <td>{{ $con->remark }}</td>
               <td>{{ $con->batch }}</td>
               <td>
                  <a href="{{url('delete_conumable/'.$con->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_consumable/'.$con->id)}}" class="btn btn-info">Edit</a>
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
