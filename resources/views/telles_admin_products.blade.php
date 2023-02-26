@if( Auth::user()->user_level != 'Admin')
<script>window.location.href ='{{ url("/") }}';</script>
@endif
@php($active_panel = 'Products')
@include('admin_panel_header')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-0">
    <h1 class="h2">Products</h1>

  </div>

  

</main>
@include('admin_panel_footer')

