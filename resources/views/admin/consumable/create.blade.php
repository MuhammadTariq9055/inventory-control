@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">


<div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Item</h4>

        <form  method="post" action="{{url('consumable_submit')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>

            <div class="form-group">
              <label for="name">Name of Item</label>
              <input type="text"  name="item_name" class="form-control" placeholder="Name of Item." required>
            </div>

            <div class="form-group">
              <label for="name">Specification</label>
              <input type="text"  name="specification" class="form-control" placeholder="Specification" required>
            </div>

            <div class="form-group">
              <label for="name">Balance as per stock reg</label>
              <input type="number"  name="bal_per_register" class="form-control" placeholder="Balance as per stock reg" required>
            </div>

            <div class="form-group">
              <label for="name">Page-No</label>
              <input type="number"  name="page_no" class="form-control" placeholder="Page-No" required>
            </div>

            <div class="form-group">
                <label for="name">qty</label>
                  <input type="number"  name="qty" class="form-control" placeholder="qty" required>
            </div>

            <div class="form-group">
              <label for="name">Phy-Found</label>
              <input type="text"  name="phy_found" class="form-control" placeholder="Phy-Found" required>
            </div>

            <div class="form-group">
              <label for="name">Short-Item</label>
              <input type="text"  name="short_item" class="form-control" placeholder="Short-Item." required>
            </div>

            <div class="form-group">
              <label for="name">Excess-Item</label>
              <input type="text"  name="excess_item" class="form-control" placeholder="Excess-Item." required>
            </div>

            <div class="form-group">
              <label for="name">Remarks</label>
              <input type="text"  name="remark" class="form-control" placeholder="Remark." required>
            </div>

            <div class="form-group">
              <label for="name">Batch</label>
              <input type="date"  name="batch" class="form-control" required>
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
