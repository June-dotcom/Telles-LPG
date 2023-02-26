<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.conventional_headers')
<style>

</style>

<body>
	@include('layouts.navbar_mod')
	<div style="background-color: #005792;">

		<div class="container">
			<div class="row">
				<div class="col col-12 col-md-8 text-white">
					<div>
						<h1 class=" text-white display-5"
						style="padding-top: 100px;font-family: 'Noto Sans', sans-serif;">
						{{ $myAccount_info->name }}

					</h1>
					<p style="font-size: 13pt;">{{$myAccount_info->email}} - {{$myAccount_info->user_level}} account</p>

				</div>
			</div>

		</div>

	</div>
</div>
<div class="container mt-2">
	<div class="row no-gutters">
		<div class="col col-12 col-md-5">
			<div class="card border-0  p-3">
				<div class="card-body">
			
					<div>
					@if($myAccount_info->houseNum == NULL || $myAccount_info->barangay == NULL || $myAccount_info->town_city == NULL  || $myAccount_info->phone_number == NULL)
				<p>Incomplete account details please edit</p>
				<button  type="submit" class="btn btn-light float-right" href="actions/customers/edit"
						onclick="event.preventDefault();
						document.getElementById('submit_uid{{$myAccount_info->id}}').submit();">
						<i class="fas fa-user-edit"></i>
					</button>
				@endif 
						


					<form id="submit_uid{{$myAccount_info->id}}" action="/customers-edit"
						method="POST" class="d-none">
						@csrf
						<input type="hidden" name="user_id" value="{{$myAccount_info->id}}">
					</form>
					<h4 class="lead" style="font-family: 'Noto Sans', sans-serif;">
						Contact details

					</h4>
					<table class="table  table-borderless bg-white">

						<tbody>

							<tr >
								<td>Address</td>
								<td>{{$myAccount_info->houseNum}} {{$myAccount_info->barangay}} {{$myAccount_info->town_city}}  </td>

							</tr>
							<tr>
								<td>Phone</td>
								<td> {{$myAccount_info->phone_number}}  </td>

							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col col-12 col-md-7">
		<div class="card border-0  p-3">

			<div class="card-body">
				<div>
					<h4 class="lead" style="font-family: 'Noto Sans', sans-serif;">
						Recent orders

					</h4>
					<table class="table table-borderless">
						<thead>
							<td>Date/Time</td>

							<td>Lpg type</td>

							<td>Bill</td>
							<td>Status</td>

						</thead>
						<tbody>
							@foreach($myOrders as $order_item)
							<tr>
								<td>{{$order_item->created_at}}  </td>
								<td>{{$order_item->lpg_type}}  </td>
								<td>{{$order_item->bill}}</td>
								<td>{{$order_item->Status}}</td>


							</tr>
							@endforeach


						</tbody>

					</table>
					{{ $myOrders->onEachSide(5)->links() }}

				</div>
			</div>
		</div>
	</div>


</div>
</div>
</body>
@include('layouts.conventional_footers')

</html>
