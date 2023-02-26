<h2 style="font-family: 'Noto Sans', sans-serif;">Delivery details</h2>

<input type="hidden" name="gastype" value="{{ $gastype }}">
<div class="row">
  <div class="col col-12 col-md-6">
      <div class="form-group">
          <label>Name</label>
          <h3 class="lead">{{ Auth::user()->name }}</h3>

          <input hidden type="text" class="form-control" name="custname"
          value="{{ Auth::user()->name }}" placeholder="Full name" autofocus>


      </div>
  </div>
  <div class="col col-12 col-md-6">
      <div class="form-group">
          <label>Email Phone number</label>
          <h3 class="lead">{{$cust_address->phone_number}} {{ Auth::user()->email }}</h3>

          <input  hidden type="text" class="form-control" name="phone"
          value="{{$cust_address->phone_number}}" autofocus>
      </div>
  </div>

</div>
<div class="row">
  <div class="col col-12">
          <!-- <input  type="text" class="form-control" name="address"
              placeholder="Phone number" value="{{$cust_address->houseNum}} {{$cust_address->barangay}} {{$cust_address->town_city}}" required autofocus> -->

              <div class="row">
                  <div class="col col-12 col-md-4">
                      <label class=" col-form-label ">House no./Purok</label>
                      <h3 class="lead">{{$cust_address->houseNum}}</h3>
                      <input type="text" class="form-control" hidden name="address_house_num" value="{{$cust_address->houseNum}}">

                  </div>
                  <div class="col col-12 col-md-4">
                      <label class=" col-form-label ">Barangay</label>
                      <h3 class="lead">{{$cust_address->barangay}}</h3>

                      <input hidden type="text" class="form-control" name="address_barangay" value="{{$cust_address->barangay}}">

                  </div>
                  <div class="col col-12 col-md-4">
                  <h3 class="lead">{{$cust_address->town_city }}</h3>

                    <label class="col-form-label">Town/City</label>
                    <select hidden class="form-select" aria-label="Town/City" name="address_town_city" >
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

      <div class="row">
       <div class="col col-12 col-md-4">

          <div class="form-group">
              <label>Tank quantity</label>
              <select id="gasqty" name="gasqty" onchange="calculate_total()" class="form-control">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

              </select>
          </div>
      </div>
  </div>

</div>
