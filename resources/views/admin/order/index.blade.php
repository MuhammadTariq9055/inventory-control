@extends('admin.layout.master')

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
          {{-- <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Item name</th>
                <th>User Name</th>
                @if (auth()->user()->role_id == 1)
                <th>Admin Name</th>
                @endif
                <th>Item Type</th>
                <th>Created At</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($orders as $key=> $order)
              <tr>

              <td>{{ ++$key }}</td>
               <td>
                   @if ($order->permanent)
                        @php
                        $temp = $order->permanent;
                        @endphp
                        {{ $order->permanent->equipment }}
                   @elseif ($order->consumable)
                        @php
                        $temp = $order->consumable;
                        @endphp
                        {{ $order->consumable->item_name }}
                   @elseif ($order->stationary)
                        @php
                        $temp = $order->stationary;
                        @endphp
                        {{ $order->stationary->item }}
                   @endif
                </td>
                <td> {{ $order->user->name }} </td>
                @if (auth()->user()->role_id == 1)
                    <td>  {{ $order->admin->name }} </td>
                @endif
                <td>
                    @if ($order->permanent)
                         Parmenent Item
                    @elseif ($order->consumable)
                        Consumable Item
                    @elseif ($order->stationary)
                        Stationary Item
                    @endif
                 </td>
               <td>{{ $order->created_at }}</td>
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
                <td>
                    @if ($order->status == 0 && auth()->user()->role_id == 1)
                        @if ($temp->status == 0)
                        <a href="{{url('super_admin/approve_order/'.$order->id)}}" class="btn btn-success">Approved</a>
                        @endif
                        <a href="{{url('super_admin/dis_approve_order/'.$order->id)}}" class="btn btn-danger">Disapproved</a>
                    @endif
                    @if ($order->status == 3 && auth()->user()->role_id == 2)
                        <a href="{{url('admin/complete_order/'.$order->id)}}" class="btn btn-success">Complete</a>
                    @endif
                </td>
              </tr>
          @endforeach
            </tbody>
          </table> --}}
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Item name</th>
                <th>Item Description</th>
                <th>User Name</th>
                @if (auth()->user()->role_id == 1)
                <th>Admin Name</th>
                @endif
                <th>Demand</th>
                <th>Supply</th>
                <th>Main Store Entry</th>
                <th>Deptt Entry Stock</th>
                <th>Purpose</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Action</th>
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
                 <td> {{ $order->user->name }} </td>
                @if (auth()->user()->role_id == 1)
                    <td>  {{ $order->admin->name }} </td>
                @endif
               <td>{{ $order->demand }}</td>
               <td>{{ $order->supply }}</td>
               <td>{{ $order->main_store_entry }}</td>
               <td>{{ $order->deptt_stock_entry }}</td>
               <td>{{ $order->purpose }}</td>
               <td>{{ $order->comment }}</td>
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
               <td>
                    @if ($order->status == 0 && auth()->user()->role_id == 1)
                    @if ($order->item->status == 0)
                    <a  data-toggle="modal" data-id="{{ $order->id }}" data-target="#myModal" class="btn btn-success approved_btn">Approved</a>
                    @endif
                    <a  data-toggle="modal" data-id="{{ $order->id }}" data-target="#disapprovedModel" class="btn btn-danger approved_btn">Disapproved</a>
                    @endif
                    @if ($order->status == 3 && auth()->user()->role_id == 2)
                        <a  data-toggle="modal" data-id="{{ $order->id }}" data-target="#completeModal" class="btn btn-success approved_btn">Complete</a>
                        {{-- <a href="{{url('admin/complete_order/'.$order->id)}}" class="btn btn-success">Complete</a> --}}
                    @endif
                </td>
              </tr>
          @endforeach
            </tbody>
          </table>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">For Comment</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  {{-- <p>Some text in the modal.</p> --}}
                  <form id="approvedform"  method="post" action="{{url('super_admin/approve_order')}}" enctype="multipart/form-data">
                    {{@csrf_field()}}
                      <fieldset>
                        <input type="hidden" name="order_id" value="">
                        <div class="form-group">
                          <label for="name">Comment</label>
                          <input type="text"  name="comment" class="form-control" placeholder="Enter Comment" required>
                        </div>

                          <button class="btn btn-primary" type="submit">Approved</button>
                      </fieldset>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
              </div>

            </div>
          </div>
          <div id="disapprovedModel" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">For Comment</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  {{-- <p>Some text in the modal.</p> --}}
                  <form id="approvedform"  method="post" action="{{url('super_admin/dis_approve_order')}}" enctype="multipart/form-data">
                    {{@csrf_field()}}
                      <fieldset>
                        <input type="hidden" name="order_id" value="">
                        <div class="form-group">
                          <label for="name">Comment</label>
                          <input type="text"  name="comment" class="form-control" placeholder="Enter Comment" required>
                        </div>

                          <button class="btn btn-primary" type="submit">Disapproved</button>
                      </fieldset>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
              </div>

            </div>
          </div>
          <div id="completeModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Complete order</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  {{-- <p>Some text in the modal.</p> --}}
                  <form id="approvedform"  method="post" action="{{url('admin/complete_order')}}" enctype="multipart/form-data">
                    {{@csrf_field()}}
                      <fieldset>
                        <input type="hidden" name="order_id" value="">
                        <div class="form-group">
                            <label for="name">Supply</label>
                            <input type="number"  name="supply" class="form-control" placeholder="supply" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Main Store Entry</label>
                            <input type="text"  name="main_store_entry" class="form-control" placeholder="Main Store Entry" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Deppt Stock Entry</label>
                            <input type="text"  name="deptt_stock_entry" class="form-control" placeholder="Deppt Store Entry" required>
                        </div>

                          <button class="btn btn-primary" type="submit">Complete</button>
                      </fieldset>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
              </div>

            </div>
          </div>
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
