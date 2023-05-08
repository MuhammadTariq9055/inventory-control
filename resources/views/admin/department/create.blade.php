@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    
<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Department Name</h4>
       
        <form  method="post" action="{{url('depart_submit')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

            <div class="form-group">
              <label for="name">D-Name</label>
              <input type="text"  name="dname" class="form-control" placeholder="Department Name" required>
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
