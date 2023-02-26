@php
    $lpgtype_list = DB::table('lpgtype')->where('is_active', 1)->get();
@endphp

<div class="row no-gutters">
    @foreach($lpgtype_list as $lpgtype)
        <div class="col col-lg-3 col-md-4 col-sm-12 col-12 pl-1 pr-1">
            <div class="card border-0 shadow  mb-2 rounded text-white" style="background-color: #E63946;">
                <img class="card-img-top border-0 ">
                <div class="card-body">
                    <h3 class="card-title " style="font-family: 'Noto Sans', sans-serif;">{{ $lpgtype->lpg_type }}
                    </h3>
                    <p class="card-text">&#8369; {{ $lpgtype->price }}</p>
                    <a href="
@guest
{{ $varlink }}
@else
@if(Route::has('login'))
{{ $varlink . '/' . $lpgtype->lpg_type }}                    
@endif
@endguest
    " class="btn text-white float-right" style="background-color: #1D3557;">Order
                        now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
