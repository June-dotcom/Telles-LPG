<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.conventional_headers')
<style>

</style>
<script type="text/javascript">


</script>
<body onload="calculate_total()">
	@include('navbar')
	<div class="container mt-5 pt-5">
		<div class="row no-gutters ">
			<div class="col col-12 col-md-6 p-2">  
				<form  action="/done-edit"  method="POST">
					@csrf
					<input type="hidden" name="uid" value="{{$cust_address->id}}">
					@include('admin_edit_forms')
					<button class="btn btn-dark mt-2">Cancel</button>
					<button type="submit" class="btn btn-primary mt-2">Done</button>
				</form>
			</div>
		</div>
	</div>


</body>

</html>