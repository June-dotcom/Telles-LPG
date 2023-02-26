@if( Auth::user()->user_level != 'Admin')
<script>window.location.href ='{{ url("/") }}';</script>
@endif
@php($active_panel = 'Orders')
@include('admin_panel_header')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-0">
    <h1 class="h2">Orders</h1>

  </div>
  <div class="row no-gutters">
    {{ $get_orders_list->onEachSide(6)->links() }}

    @foreach($get_orders_list as $orders_item)
    <div class="col col-12 col-lg-4 col-md-6 p-1">
      <div class="card p-3 border-0 shadow">
        <span>{{$orders_item->created_at}}</span>

        <span>Customer name: {{$orders_item->name}}</span>
        <span>Customer address: {{$orders_item->houseNum}} {{$orders_item->barangay}} {{$orders_item->town_city}}</span>
        <span>Customer phone {{$orders_item->phone_number}}</span>
        <span>LPG type: {{$orders_item->lpg_type}}</span>
        <span>Status: {{$orders_item->Status}}</span>
        <span>Bill: &#8369; {{$orders_item->bill}}</span>
        <div class="dropdown mt-2" >
          <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Actions
          </button>
          <ul class="dropdown-menu border-0 shadow" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="orders/actions/{{'Pending'}}/{{$orders_item->invoice_id}}">Mark as pending</a></li>
            <li><a class="dropdown-item" href="orders/actions/Done/{{$orders_item->invoice_id}}">Mark as Done</a></li>

            <li><a class="dropdown-item" href="orders/actions/Deleted/{{$orders_item->invoice_id}}">Hide/Delete</a></li>

          </ul>
        </div>

      </div>
    </div>
    @endforeach

  </div>

</main>
@include('admin_panel_footer')

