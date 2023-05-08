@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    

<center><div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Permanent Stock</h4>
       
        <form  method="post" action="{{url('stock_submit',$perm->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>
          
    
            <div class="form-group">
              <label for="name">Date</label>
              <input type="date" value="{{$perm->date}}"  name="date" class="form-control">
            </div>

            <div class="form-group">
              <label for="name">Discription</label>
              <input type="text" value="{{$perm->discription}}"  name="discription" class="form-control" placeholder="Discription" >
            </div>

            <div class="form-group">
              <label for="name">Qty</label>
              <input type="text" value="{{$perm->qty}}"  name="qty" class="form-control" placeholder="Qty" >
            </div>

            <div class="form-group">
              <label for="name">Unit-Rate</label>
              <input type="text" value="{{$perm->unit_rate}}"  name="unit_rate" class="form-control" placeholder="Unit-Rate" >
            </div>

            <div class="form-group">
              <label for="name">Total(Rs.)</label>
              <input type="number" value="{{$perm->total}}"  name="total" class="form-control" placeholder="Total(Rs.)" >
            </div>

            <div class="form-group">
              <label for="name">GST(Rs.)</label>
              <input type="text" value="{{$perm->gst}}"  name="gst" class="form-control" placeholder="GST(Rs.)" >
            </div>

            <div class="form-group">
              <label for="name">Grand-Total(Rs.)</label>
              <input type="number" value="{{$perm->grand_total}}"  name="grand_total" class="form-control" placeholder="Grand-Total(Rs.)" >
            </div>

            <div class="form-group">
              <label for="name">Supplier-Name</label>
              <input type="text" value="{{$perm->supplier_name}}"  name="supplier_name" class="form-control" placeholder="Supplier-Name." >
            </div>

            <div class="form-group">
              <label for="name">Bill-No</label>
              <input type="text" value="{{$perm->bill_no}}"  name="bill_no" class="form-control" placeholder="Bill-No" >
            </div>

            <div class="form-group">
              <label for="name">Pg-No</label>
              <input type="number" value="{{$perm->pg_no}}"  name="pg_no" class="form-control" placeholder="Pg-No" >
            </div>

            <div class="form-group">
              <label for="name">Issue-Date</label>
              <input type="date" value="{{$perm->issu_date}}"  name="issu_date" class="form-control" placeholder="Issue-Date" >
            </div>

            <div class="form-group">
              <label for="name">Qty-Issue</label>
              <input type="number" value="{{$perm->qty_issu}}"  name="qty_issu" class="form-control" placeholder="Qty-Issue" >
            </div>

            <div class="form-group">
              <label for="name">Name-of Req Deptt</label>
              <input type="text" value="{{$perm->name_req_deptt}}"  name="name_req_deptt" class="form-control" placeholder="Name-of Req Deptt" >
            </div>

            <div class="form-group">
              <label for="name">Bal-After-Issue</label>
              <input type="text" value="{{$perm->bal_after_issue}}"  name="bal_after_issue" class="form-control" placeholder="Bal-After-Issue" >
            </div>

            <div class="form-group">
              <label for="name">Deptt Pg-No</label>
              <input type="number" value="{{$perm->deptt_pg_no}}"  name="deptt_pg_no" class="form-control" placeholder="Deptt Pg-No" >
            </div>

            <div class="form-group">
              <label for="name">Folio</label>
              <input type="text" value="{{$perm->folio}}"  name="folio" class="form-control" placeholder="Folio" >
            </div>

            <div class="form-group">
              <label for="name">Remarks</label>
              <input type="text" value="{{$perm->remark}}"  name="remark" class="form-control" placeholder="Remarks" >
            </div>

            <div class="form-group">
              <label for="name">Auctions</label>
              <input type="text" value="{{$perm->auction}}"  name="auction" class="form-control" placeholder="Auctions" >
            </div>

              <input class="btn btn-primary" type="submit" value="Update">
          </fieldset>
        </form>
      </div>
    </div>
  </div></center>
  @endsection
