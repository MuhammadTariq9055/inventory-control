@extends('user.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">


<div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Create Request</h4>

        <form  method="post" action="{{url('post_order')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

            <div class="form-group">
              <label for="name">Name of Item</label>
              <select class="form-control select2" name="item_id">
                <option></option>
                @foreach($items as $item)
                <option value="{{$item->id}}">{{$item->item_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">Description:</label>
              <input type="text"  name="description" class="form-control" placeholder="description" required>
            </div>

            <div class="form-group">
              <label for="name">Demand</label>
              <input type="number"  name="demand" class="form-control" placeholder="Demand" required>
            </div>

            {{-- <div class="form-group">
                <label for="name">Supply</label>
                <input type="number"  name="supply" class="form-control" placeholder="supply" required>
              </div>

            <div class="form-group">
                <label for="name">Main Store Entry</label>
                  <input type="text"  name="main_store_entry" class="form-control" placeholder="Main Store Entry" required>
            </div>

            <div class="form-group">
                <label for="name">Deppt Stock Entry</label>
                  <input type="text"  name="deppt_stock_entry" class="form-control" placeholder="Deppt Store Entry" required>
            </div> --}}

            <div class="form-group">
                <label for="name">Purpose</label>
                  <input type="text"  name="purpose" class="form-control" placeholder="Purpose" required>
            </div>

              <input class="btn btn-primary" type="submit" value="Place Request">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
