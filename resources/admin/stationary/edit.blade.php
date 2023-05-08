@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    

<center><div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Edit Stationary Item</h4>
       
        <form  method="post" action="{{url('update_submit',$stat->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>
          
          <div class="form-group">
              <label for="name">Items</label>
              <input type="text"  name="item" value="{{ $stat->item }}" class="form-control" placeholder="Items." >
            </div>


            <div class="form-group">
              <label for="name">Specification</label>
              <input type="text"  name="specification" value="{{ $stat->specification }}" class="form-control" placeholder="Specification" >
            </div>

            <div class="form-group">
              <label for="name">Qty</label>
              <input type="text"  name="qty" value="{{ $stat->qty }}" class="form-control" placeholder="qty" >
            </div>


              <input class="btn btn-primary" type="submit" value="Update">
          </fieldset>
        </form>
      </div>
    </div>
  </div></center>
  @endsection
