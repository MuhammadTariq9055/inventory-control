@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add User Name</h4>

        <form  method="post" action="{{url('enduser_submit')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

            <div class="form-group">
              <label for="name">User Name</label>
              <input type="text"  name="name" class="form-control" placeholder="User Name" required>
            </div>

            <div class="form-group">
                <label for="name">Select Department</label>
                <select name="department" class="form-control">
                    <option></option>
                    @foreach($depts as $dept)
                    <option value="{{ $dept->id }}">{{ $dept->dname }}</option>
                    @endforeach
                </select>
                {{-- <input type="text"  name="name" class="form-control" placeholder="Department Name" required> --}}
              </div>
              <div class="form-group">
                <label for="email">User Email: </label>
                <input type="email"  name="email" class="form-control" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="number">User Phone:</label>
                <input type="number"  name="number" class="form-control" placeholder="User Phone" required>
              </div>
              <div class="form-group">
                <label for="password">User Password</label>
                <input type="text"  name="password" class="form-control" placeholder="Enter Password" required>
              </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
