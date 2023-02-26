@if( Auth::user()->user_level != 'Admin')
<script>window.location.href ='{{ url("/") }}';</script>
@endif
@php($active_panel = 'Dashboard')
@include('admin_panel_header')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1 mb-1 border-0">
    <h1 class="h2">Dashboard</h1>

  </div>


  <div class="row no-gutters">
    <div class="col col-md-3 p-1 col-6">
      <div class="card border-0 shadow p-2 bg-primary text-white ">
        <h1>{{$get_customers_count}}</h1>
        <span>
          Total customers
        </span>
      </div>
    </div>
    <div class="col col-md-3  p-1 col-6">
      <div class="card border-0 shadow mr-2 p-2 bg-danger text-white">
        <h1>{{$get_pending_orders}}</h1>
        <span>
          Pending orders
        </span>

      </div>
    </div>
    <div class="col col-md-3  p-1 col-6">
      <div class="card border-0 shadow mr-2 p-2 text-white"  style="background-color: #1eae98;">

        <h1>{{$get_delivered_orders}}</h1>
        <span>
          Delivered orders
        </span>
      </div>
    </div>
    <div class="col col-md-3  p-1  col-6" >
      <div class="card border-0 shadow mr-2 p-2 text-white" style="background-color: #233e8b;">
        <h1>{{$get_total_orders}}</h1>
        <span>
         Total orders
       </span>
     </div>
   </div>
 </div>
</main>
@include('admin_panel_footer')

