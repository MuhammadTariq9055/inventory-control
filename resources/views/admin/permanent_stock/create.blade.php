@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    
<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Permanent Stock</h4>
       
        <form  method="post" action="{{url('permanent_submit')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>
          
    
            <div class="form-group">
              <label for="name">Date</label>
              <input type="date"  name="date" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="name">Discription</label>
              <input type="text"  name="discription" class="form-control" placeholder="Discription" required>
            </div>

            <div class="form-group">
              <label for="name">Qty</label>
              <input type="text"  name="qty" class="form-control" placeholder="Qty" required>
            </div>

            <div class="form-group">
              <label for="name">Unit-Rate</label>
              <input type="text"  name="unit_rate" class="form-control" placeholder="Unit-Rate" required>
            </div>

            <div class="form-group">
              <label for="name">Total(Rs.)</label>
              <input type="number"  name="total" class="form-control" placeholder="Total(Rs.)" required>
            </div>

            <div class="form-group">
              <label for="name">GST(Rs.)</label>
              <input type="text"  name="gst" class="form-control" placeholder="GST(Rs.)" required>
            </div>

            <div class="form-group">
              <label for="name">Grand-Total(Rs.)</label>
              <input type="number"  name="grand_total" class="form-control" placeholder="Grand-Total(Rs.)" required>
            </div>

            <div class="form-group">
              <label for="name">Supplier-Name</label>
              <input type="text"  name="supplier_name" class="form-control" placeholder="Supplier-Name." required>
            </div>

            <div class="form-group">
              <label for="name">Bill-No</label>
              <input type="text"  name="bill_no" class="form-control" placeholder="Bill-No" required>
            </div>

            <div class="form-group">
              <label for="name">Pg-No</label>
              <input type="number"  name="pg_no" class="form-control" placeholder="Pg-No" required>
            </div>

            <div class="form-group">
              <label for="name">Issue-Date</label>
              <input type="date"  name="issu_date" class="form-control" placeholder="Issue-Date" required>
            </div>

            <div class="form-group">
              <label for="name">Qty-Issue</label>
              <input type="number"  name="qty_issu" class="form-control" placeholder="Qty-Issue" required>
            </div>

            <div class="form-group">
              <label for="name">Name-of Req Deptt</label>
              <input type="text"  name="name_req_deptt" class="form-control" placeholder="Name-of Req Deptt" required>
            </div>

            <div class="form-group">
              <label for="name">Bal-After-Issue</label>
              <input type="text"  name="bal_after_issue" class="form-control" placeholder="Bal-After-Issue" required>
            </div>

            <div class="form-group">
              <label for="name">Deptt Pg-No</label>
              <input type="number"  name="deptt_pg_no" class="form-control" placeholder="Deptt Pg-No" required>
            </div>

            <div class="form-group">
              <label for="name">Folio</label>
              <input type="text"  name="folio" class="form-control" placeholder="Folio" required>
            </div>

            <div class="form-group">
              <label for="name">Remarks</label>
              <input type="text"  name="remark" class="form-control" placeholder="Remarks" required>
            </div>

            <div class="form-group">
              <label for="name">Auctions</label>
              <input type="text"  name="auction" class="form-control" placeholder="Auctions" required>
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
