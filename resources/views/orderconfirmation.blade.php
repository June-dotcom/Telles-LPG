<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.conventional_headers')
<style>

</style>
<script type="text/javascript">
    function calculate_total() {
        var price_per_unit = {{ $order_qt->price }};
       
        var quantity = (document.getElementById("gasqty").value == null) ? 1 : document.getElementById("gasqty").value;
        document.getElementById("qty_lpg").innerHTML = quantity;
        var total = (price_per_unit * quantity);
        document.getElementById("total_price").innerHTML = total;

        document.getElementById("cust_qty_lpg").value = quantity;
        document.getElementById("cust_bill").value = total;

    }
    
</script>
<body onload="calculate_total()">
    @include('navbar')

    <form  action="{{ $gastype }}/submit"  method="POST">
        @csrf
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col col-12 col-md-8">
                    @include('delivery_details_orders')
                </div>
                <div class="col col-12 col-md-4 mt-1">
                  
                        @include('billing_details_orders')
                    <button type="submit" class="btn btn-primary w-100">Confirm</button>
                    
                </div>
            </div>
        </div>
    </form>
</body>

</html>
