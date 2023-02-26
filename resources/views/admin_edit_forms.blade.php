  <h2 style="font-family: 'Noto Sans', sans-serif;">Edit customer account</h2>

  <div class="row">
    <div class="col col-12 col-md-6">
        <div class="form-group">
            <label>Name</label>
            <input  type="text" class="form-control" name="custname"
            value="{{$cust_address->name}}" placeholder="Full name" required autofocus>


        </div>
    </div>
    <div class="col col-12 col-md-6">
        <div class="form-group">
            <label>Phone number</label>
            <input  type="text" class="form-control" name="phone"
            value="{{$cust_address->phone_number}}" required autofocus>
        </div>
    </div>

</div>
<div class="row">
    <div class="col col-12">
            <!-- <input  type="text" class="form-control" name="address"
                placeholder="Phone number" value="{{$cust_address->houseNum}} {{$cust_address->barangay}} {{$cust_address->town_city}}" required autofocus> -->

                <div class="row">
                    <div class="col col-4">
                        <label class=" col-form-label ">House no./Purok</label>
                        <input type="text" class="form-control" name="address_house_num" value="{{$cust_address->houseNum}}">

                    </div>
                    <div class="col col-4">
                        <label class=" col-form-label ">Barangay</label>
                        <input type="text" class="form-control" name="address_barangay" value="{{$cust_address->barangay}}">

                    </div>
                    <div class="col col-4">

                      <label class=" col-form-label ">Town/City</label>
                      <select class="form-select" aria-label="Town/City" name="address_town_city" >
                        <option 
                        @if($cust_address->town_city == 'Villasis') 
                            selected
                        @endif 
                        value="Villasis">Villasis</option>
                        <option 
                         @if($cust_address->town_city == 'Rosales') 
                            selected
                        @endif value="Rosales">Rosales</option>
                        <option 
                         @if($cust_address->town_city == 'Urdaneta') 
                            selected
                        @endif 
                        value="Urdaneta">Urdaneta</option>
                        <option 
                         @if($cust_address->town_city == 'Santo Tomas') 
                            selected
                        @endif 
                        value="Santo Tomas">Santo Tomas</option>
                        <option 
                          @if($cust_address->town_city == 'Binalonan') 
                            selected
                        @endif 
                        value="Binalonan">Binalonan</option>

                    </select>

                </div>
            </div>
        </div>

       

</div>
