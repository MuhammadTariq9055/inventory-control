@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Consumable_Stock</a></li>
    <li class="breadcrumb-item active" aria-current="page">Consumable_Stock </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Consumable_Stock </h6>
      {{-- <a href="{{url('admin/consumable_stock/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a> --}}
        <div class="table-responsive">
          {{-- <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Particulars</th>
                <th>Bill_No</th>
                <th>Receipts</th>
                <th>Issued</th>
                <th>Balance</th>
                <th>Remarks</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($sta as $key=> $stacke)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $stacke->month }}</td>
               <td>{{ $stacke->particular }}</td>
               <td>{{ $stacke->bill_no }}</td>
               <td>{{ $stacke->receipt }}</td>
               <td>{{ $stacke->issued }}</td>
               <td>{{ $stacke->balance }}</td>
               <td>{{ $stacke->remark }}</td>

               <td>
                  <a href="{{url('delete_stack/'.$stacke->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_stack/'.$stacke->id)}}" class="btn btn-info">Edit</a>
               </td>
              </tr>
          @endforeach
            </tbody>
          </table> --}}
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Name Of Item</th>
                <th>Specification</th>
                <th>Bal Per-Stock Reg</th>
                <th>Page-No</th>
                <th>Qty</th>
                <th>Remaining Qty</th>
                <th>Phy-Found</th>
                <th>Short-Item</th>
                <th>Excess-Item</th>
                <th>Remark</th>
                <th>Batch</th>
                {{-- <th>Action</th> --}}
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
               <td>{{ $con->qty }}</td>
               <td>{{ $con->re_qty }}</td>
               <td>{{ $con->phy_found }}</td>
               <td>{{ $con->short_item }}</td>
               <td>{{ $con->excess_item }}</td>
               <td>{{ $con->remark }}</td>
               <td>{{ $con->batch }}</td>
               {{-- <td>
                  <a href="{{url('delete_conumable/'.$con->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_consumable/'.$con->id)}}" class="btn btn-info">Edit</a>
               </td> --}}
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
