   <table class="table table-light table-borderless">
    <thead>
        <tr>
            <th colspan="2" scope="col ">   <h4 style="font-family: 'Noto Sans', sans-serif;">Billing details</h4></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>LPG type</td>
            <td>  {{ $gastype }} </td> 
        </tr>
        <tr>
            <td>Quantity X Price</td>
            <td><span id="qty_lpg"></span> X  {{ $order_qt->price }}</td> 
        </tr>

        <tr>
            <td>Total</td>
            <td id="total_price"></td> 
        </tr>
    </tbody>
</table>
<input type="hidden" id="" name="cust_lpg_type" value="{{$gastype}}">
<input type="hidden" id="cust_qty_lpg" name="cust_qty_lpg">
<input type="hidden" id="cust_shipping_fee" name="cust_shipping_fee">
<input type="hidden" id="cust_bill" name="cust_bill" >

