@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Edit User</h4>

        <form  method="post" action="{{url('update_user',$user->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>


            <div class="form-group">
              <label for="name">User Name</label>
              <input type="text"  name="name" value="{{ $user->name }}" class="form-control" placeholder="Department Name" >
            </div>
            <div class="form-group">
                <label for="name">Select Department</label>
                <select name="department" class="form-control">
                    @foreach($depts as $dept)
                    <option value="{{ $dept->id }}" {{($user->department_id === $dept->id) ? 'selected' : ''}}>{{ $dept->dname }}</option>
                    @endforeach
                </select>
             </div>
              <div class="form-group">
                <label for="email">User Email: </label>
                <input type="email"  name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="number">User Phone:</label>
                <input type="number"  name="number" value="{{ $user->number }}" class="form-control" placeholder="User Phone" required>
              </div>
              <div class="form-group">
                <label for="password">User Password</label>
                <input type="text"  name="password" value="{{ $user->password }}" class="form-control" placeholder="Enter Password" required>
              </div>

              <input class="btn btn-primary" type="submit" value="Update">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
