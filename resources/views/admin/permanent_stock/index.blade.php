@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Permanent-Stock</a></li>
    <li class="breadcrumb-item active" aria-current="page">Permanent-Stock </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Permanent-Stock </h6>
      {{-- <a href="{{url('admin/permanent_stock/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a> --}}
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
                    <th>Remaining Qty</th>
                    <th>Stock-Reg</th>
                    <th>P.No</th>
                    <th>Dept-P.No</th>
                    <th>Department</th>
                    {{-- <th>Action</th> --}}
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
                   <td>{{ $per->re_qty }}</td>
                   <td>{{ $per->stock_reg }}</td>
                   <td>{{ $per->p_no }}</td>
                   <td>{{ $per->dept_p_no }}</td>
                   <td>{{ $per->department }}</td>
                   {{-- <td>
                      <a href="{{url('delete_perm/'.$per->id)}}" class="btn btn-danger">Delete</a>
                      <a href="{{url('edit_perm/'.$per->id)}}" class="btn btn-info">Edit</a>
                   </td> --}}
                  </tr>
              @endforeach
                </tbody>
              </table>
          {{-- <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Discription</th>
                <th>Qty</th>
                <th>Unit-Rate</th>
                <th>Total(Rs.)</th>
                <th>GST(Rs.)</th>
                <th>Grand Total(Rs.)</th>
                <th>Suppliers-Name</th>
                <th>Bill-No</th>
                <th>Pg-No</th>
                <th>Issu-Date</th>
                <th>Qty-Issu</th>
                <th>Name of Req-Deptt</th>
                <th>Bal After-Issu</th>
                <th>Deptt Pg-No</th>
                <th>Folio</th>
                <th>Remarks</th>
                <th>Auction</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($perm as $key=> $per)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $per->date }}</td>
               <td>{{ $per->discription }}</td>
               <td>{{ $per->qty }}</td>
               <td>{{ $per->unit_rate }}</td>
               <td>{{ $per->total }}</td>
               <td>{{ $per->gst }}</td>
               <td>{{ $per->grand_total }}</td>
               <td>{{ $per->supplier_name }}</td>
               <td>{{ $per->bill_no }}</td>
               <td>{{ $per->pg_no }}</td>
               <td>{{ $per->issu_date }}</td>
               <td>{{ $per->qty_issu }}</td>
               <td>{{ $per->name_req_deptt }}</td>
               <td>{{ $per->bal_after_issue }}</td>
               <td>{{ $per->deptt_pg_no }}</td>
               <td>{{ $per->folio }}</td>
               <td>{{ $per->remark }}</td>
               <td>{{ $per->auction }}</td>
               <td>
                  <a href="{{url('delete_permanent/'.$per->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_permanent/'.$per->id)}}" class="btn btn-info">Edit</a>
               </td>
              </tr>
          @endforeach
            </tbody>
          </table> --}}
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
