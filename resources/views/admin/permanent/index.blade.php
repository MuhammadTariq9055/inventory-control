@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Permanent_Item</a></li>
    <li class="breadcrumb-item active" aria-current="page">Permanent_Item </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Permanent_Item </h6>
        @if(auth()->user()->role_id == 2)
      <a href="{{url('admin/permanent/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a>
      @endif
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Invoice No</th>
                <th>DOP</th>
                <th>Equipment</th>
                <th>Specification</th>
                <th>Qty</th>
                <th>Stock-Reg</th>
                <th>P.No</th>
                <th>Dept-P.No</th>
                <th>Department</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($perm as $key=> $per)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $per->invoice_no }}</td>
               <td>{{ $per->dop }}</td>
               <td>{{ $per->equipment }}</td>
               <td>{{ $per->specification }}</td>
               <td>{{ $per->qty }}</td>
               <td>{{ $per->stock_reg }}</td>
               <td>{{ $per->p_no }}</td>
               <td>{{ $per->dept_p_no }}</td>
               <td>{{ $per->department }}</td>
               <td>{{ ($per->status == 0) ? 'Available' : 'Not Available' }}</td>
               <td>
                @if($per->status == 0 && auth()->user()->role_id == 2)
                  <a href="{{url('delete_perm/'.$per->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_perm/'.$per->id)}}" class="btn btn-info">Edit</a>
                @endif
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
