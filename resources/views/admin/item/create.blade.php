@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">


<div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Item</h4>

        <form  method="post" action="{{url('item/')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

          <div class="form-group">
              <label for="name">Name</label>
              <input type="text"  name="item_name" class="form-control" placeholder="Item name" >
            </div>


            <div class="form-group">
              <label for="name">Description</label>
              <input type="text"  name="item_desc" class="form-control" placeholder="Description" >
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
