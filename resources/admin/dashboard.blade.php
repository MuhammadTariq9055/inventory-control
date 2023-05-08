@extends('admin.layout.master')
@section('content')


<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-info border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-info mb-0">{{$total_permanent}}</h4>
                <span>Total Permanent-Items</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="icon-basket-loaded text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
               <div class="media-body text-left">
                <h4 class="text-danger mb-0">{{$total_consumable}}</h4>
                <span>Total Consumable-Items</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-success border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-success mb-0">{{$total_stationary}}</h4>
                <span>Total Stationary-Items</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-warning border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-warning mb-0">{{$total_consumable_stock}}</h4>
                <span>Total Consumable-Stock</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div>
                                    <!-- 2nd ROW -->
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-info border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-info mb-0">{{$total_permanent_stock}}</h4>
                <span>Total Permanent-Stock</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="icon-basket-loaded text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
               <div class="media-body text-left">
                <h4 class="text-danger mb-0">{{$total_consumable}}</h4>
                <span>Total Consumable-Items</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-success border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-success mb-0">{{$total_stationary}}</h4>
                <span>Total Stationary-Items</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-warning border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-warning mb-0">{{$total_consumable_stock}}</h4>
                <span>Total Consumable-Stock</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div>
                     <!--End Row-->

</div>
</div>
 <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
   @endsection
    
  