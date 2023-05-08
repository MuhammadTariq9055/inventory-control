@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    
<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Edit Department Name</h4>
       
        <form  method="post" action="{{url('update_depart',$dep->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>


          <div class="form-group">
              <label for="name">Department Name</label>
              <input type="text"  name="dname" value="{{ $dep->dname }}" class="form-control" placeholder="Department Name" >
            </div>

              <input class="btn btn-primary" type="submit" value="Update">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
