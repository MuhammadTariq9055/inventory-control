@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Item</a></li>
    <li class="breadcrumb-item active" aria-current="page">Item </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Item </h6>
        @if(auth()->user()->role_id == 2)
      <a href="{{ url('item/create') }}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add Item</button> </a>
      @endif
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>name</th>
                <th>description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($items as $key=> $item)
              <tr>
              <td>{{ ++$key }}</td>
               <td>{{ $item->item_name }}</td>
               <td>{{ $item->item_desc }}</td>
               <td>
                @if(auth()->user()->role_id == 2)
                   <a class=" btn btn-warning " href="{{ route('item.edit',$item->id) }}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a class="btn btn-danger" href="javascript:void(0)" onclick="$(this).find('form').submit();" >
                    <form  action="{{ route('item.destroy', $item->id) }}" method="post">
                    {{@csrf_field()}}
                    <i class="fa fa-trash"></i>
                    <input type="hidden" name="_method" value="DELETE">
                  </form>
                  </a>
                  {{-- <a href="{{url('delete_stationary/'.$item->id)}}" class="btn btn-danger">Delete</a> --}}

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
