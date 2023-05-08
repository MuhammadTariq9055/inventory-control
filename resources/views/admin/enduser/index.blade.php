@extends('admin.layout.master')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">End User</a></li>
    <li class="breadcrumb-item active" aria-current="page">End User </li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">End User</h6>
        @if(auth()->user()->role_id == 2)
      <a href="{{url('admin/end_user/create')}}">  <button style="float:right; margin-bottom:20px;" class="btn btn-primary" type="submit">Add User</button> </a>
      @endif
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>name</th>
                <th>Department Name</th>
                <th>Added By</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           @foreach($users as $user)
              <tr>
              <td>{{ $user->name }}</td>
               <td>{{ ($user->department) ? $user->department->dname : 'N.A' }}</td>
               <td>{{ $user->user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->number }}</td>
               <td>{{ $user->password }}</td>
               <td>
                @if(auth()->user()->role_id == 2)
                  <a href="{{url('delete_enduser/'.$user->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('edit_enduser/'.$user->id)}}" class="btn btn-info">Edit</a>
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
