@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">


<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Item</h4>

        <form  method="post" action="{{url('update_consumable',$item->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

            <div class="form-group">
              <label for="name">Name of Item</label>
              <input type="text"  name="item_name" value="{{ $item->item_name }}" class="form-control" placeholder="Name of Item." required>
            </div>

            <div class="form-group">
              <label for="name">Specification</label>
              <input type="text"  name="specification" value="{{ $item->specification }}" class="form-control" placeholder="Specification" required>
            </div>

            <div class="form-group">
              <label for="name">Balance as per stock reg</label>
              <input type="number"  name="bal_per_register" value="{{ $item->bal_per_register }}" class="form-control" placeholder="Balance as per stock reg" required>
            </div>

            <div class="form-group">
              <label for="name">Page-No</label>
              <input type="number"  name="page_no" value="{{ $item->page_no }}" class="form-control" placeholder="Page-No" required>
            </div>

            <div class="form-group">
                <label for="name">Qty</label>
                <input type="number"  name="qty" value="{{ $item->qty }}" class="form-control" placeholder="qty" >
              </div>

            <div class="form-group">
              <label for="name">Phy-Found</label>
              <input type="text"  name="phy_found" value="{{ $item->phy_found }}" class="form-control" placeholder="Phy-Found" required>
            </div>

            <div class="form-group">
              <label for="name">Short-Item</label>
              <input type="text"  name="short_item" value="{{ $item->short_item }}" class="form-control" placeholder="Short-Item." required>
            </div>

            <div class="form-group">
              <label for="name">Excess-Item</label>
              <input type="text"  name="excess_item" value="{{ $item->excess_item }}" class="form-control" placeholder="Excess-Item." required>
            </div>

            <div class="form-group">
              <label for="name">Remarks</label>
              <input type="text"  name="remark" value="{{ $item->remark }}" class="form-control" placeholder="Remark." required>
            </div>

            <div class="form-group">
              <label for="name">Batch</label>
              <input type="date"  name="batch" value="{{ $item->batch }}" class="form-control" required>
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
