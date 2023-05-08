@extends('user.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">User Order</a></li>
    <li class="breadcrumb-item active" aria-current="page">User Order </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">User Order </h6>
      {{-- <a href="{{url('admin/stationary/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a> --}}
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Item name</th>
                <th>Item Description</th>
                <th>Demand</th>
                <th>Supply</th>
                <th>Main Store Entry</th>
                <th>Deptt Entry Stock</th>
                <th>Purpose</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
           @foreach($orders as $key=> $order)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $order->item->item_name }}
                </td>
                <td>
                    {{ $order->description }}
                 </td>
               <td>{{ $order->demand }}</td>
               <td>{{ $order->supply }}</td>
               <td>{{ $order->main_store_entry }}</td>
               <td>{{ $order->deptt_stock_entry }}</td>
               <td>{{ $order->purpose }}</td>
               <td>
                   @if($order->status == 0)
                    Pending
                    @elseif($order->status == 1)
                    Complete
                    @elseif($order->status == 2)
                    Disapproved
                    @elseif($order->status == 3)
                    Approved
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
