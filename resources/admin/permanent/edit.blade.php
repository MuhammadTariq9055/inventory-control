@extends('admin.layout.master')


@section('content')
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">    
    

<center><div  class="col-lg-6 grid-margin mb-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align:center;" class="card-title">Edit Permanent Item</h4>
       
        <form  method="post" action="{{url('update_submit',$perm->id)}}" enctype="multipart/form-data">
        {{@csrf_field()}}
          <fieldset>
          
          <div class="form-group">
              <label for="name">Invoice No</label>
              <input type="number"  name="invoice_no" value="{{ $perm->invoice_no }}" class="form-control" placeholder="Invoice-No." >
            </div>

            <div class="form-group">
              <label for="name">DOP</label>
              <input type="date"  name="dop" value="{{ $perm->dop }}" class="form-control">
            </div>

            <div class="form-group">
              <label for="name">Equipment</label>
              <input type="text"  name="equipment" value="{{ $perm->equipment }}" class="form-control" placeholder="Equipment" >
            </div>

            <div class="form-group">
              <label for="name">Specification</label>
              <input type="text"  name="specification" value="{{ $perm->specification }}" class="form-control" placeholder="Specification" >
            </div>

            <div class="form-group">
              <label for="name">Qty</label>
              <input type="number"  name="qty" value="{{ $perm->qty }}" class="form-control" placeholder="qty" >
            </div>

            <div class="form-group">
              <label for="name">Stock-Reg</label>
              <input type="text"  name="stock_reg" value="{{ $perm->stock_reg }}" class="form-control" placeholder="Stock-Reg." >
            </div>

            <div class="form-group">
              <label for="name">P.No</label>
              <input type="number"  name="p_no" value="{{ $perm->p_no }}" class="form-control" placeholder="P-No." >
            </div>

            <div class="form-group">
              <label for="name">Dept-P.No</label>
              <input type="text"  name="dept_p_no" value="{{ $perm->dept_p_no }}" class="form-control" placeholder="Dept-P-No." >
            </div>

            <div class="form-group">
              <label for="name">Department</label>
              <input type="text"  name="department" value="{{ $perm->department }}" class="form-control" placeholder="Department" >
            </div>

              <input class="btn btn-primary" type="submit" value="Update">
          </fieldset>
        </form>
      </div>
    </div>
  </div></center>
  @endsection
