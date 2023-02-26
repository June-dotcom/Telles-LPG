@if( Auth::user()->user_level != 'Admin')
<script>window.location.href ='{{ url("/") }}';</script>
@endif
@php($active_panel = 'Customers')
@include('admin_panel_header')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-0">
    <h1 class="h2">Customers</h1>

  </div>
  <div class="row no-gutters">
                    {{ $get_custs_list->onEachSide(6)->links() }}

    @foreach($get_custs_list as $cust_item)
    @if($cust_item->user_level != 'Admin')
    <div class="col col-12 col-lg-4 col-md-6 p-1">
      <div class="card p-3 border-0 shadow">
        <span>Customer name: {{$cust_item->name}}</span>
        <span>Customer address: {{$cust_item->houseNum}} {{$cust_item->barangay}} {{$cust_item->town_city}}</span>
        <span>Customer phone {{$cust_item->phone_number}}</span>

        <div class="dropdown mt-2" >
          <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Actions
          </button>
          <ul class="dropdown-menu border-0 shadow" aria-labelledby="dropdownMenuButton1">
            <form ></form>
            <li>   <a class="dropdown-item border-0" href="actions/customers/edit"
              onclick="event.preventDefault();
              document.getElementById('submit_uid{{$cust_item->id}}').submit();">
              Edit
            </a>


            <form id="submit_uid{{$cust_item->id}}" action="/customers-edit"
            method="POST" class="d-none">
                        @csrf
            <input type="hidden" name="user_id" value="{{$cust_item->id}}">
          </form>

        </li>
        <li><a class="dropdown-item" href="/actions/customers/Disable">Disable</a></li>


      </ul>
    </div>

  </div>
</div>
@endif

@endforeach

</div>

</main>
@include('admin_panel_footer')

