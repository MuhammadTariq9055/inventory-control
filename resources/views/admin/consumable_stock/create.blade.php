@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    

<div  class="col-lg-8 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Add Stock-Register</h4>
       
        <form  method="post" action="{{url('stock_submit')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>
          
          <div class="form-group">
              <label for="name">Date</label>
              <input type="date"  name="month" class="form-control" required>
            </div>


            <div class="form-group">
              <label for="name">Particular</label>
              <input type="text"  name="particular" class="form-control" placeholder="particular" required>
            </div>

            <div class="form-group">
              <label for="name">Bill-No</label>
              <input type="number"  name="bill_no" class="form-control" placeholder="Bill-No" required>
            </div>

            <div class="form-group">
              <label for="name">Receipt</label>
              <input type="number"  name="receipt" class="form-control" placeholder="Receipt" required>
            </div>

            <div class="form-group">
              <label for="name">Issued</label>
              <input type="number"  name="issued" class="form-control" placeholder="Issued-Item." required>
            </div>

            <div class="form-group">
              <label for="name">Balance</label>
              <input type="number"  name="balance" class="form-control" placeholder="Balance." required>
            </div>

            <div class="form-group">
              <label for="name">Remarks</label>
              <input type="text"  name="remark" class="form-control" placeholder="remark" required>
            </div>

              <input class="btn btn-primary" type="submit" value="save">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  @endsection
