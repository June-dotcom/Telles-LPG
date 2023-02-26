<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.conventional_headers')

<body>
    <div id="app">
        <nav class="navbar navbar-expand fixed-top navbar-dark " style="background-color:#1d3557;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
 
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @php
                            $varlink = '/'
                        @endphp
                        @guest
                            @php
                                $varlink = '/login'
                            @endphp
                            @if(Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                            @endif

                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                            @php
                                $varlink = '/order_type_confirmation'
                            @endphp
                            <li class="nav-item dropdown dropdown-dark">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    </button>
                                    <ul class="dropdown-menu">
                                    @if(Auth::user()->user_level == 'Customer')
                                        <li><a class="dropdown-item" href="/myaccount">My account</a></li>
                                    @elseif(Auth::user()->user_level == 'Admin')
                                    <li><a class="dropdown-item" href="/adminpanel">Admin panel</a></li>
                                    @endif
                                    <li><a class="dropdown-item border-0" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                             
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <!--     <div  style="background: url('images/flame.jpg');height: 400px;background-size: cover;" > 
-->
    <div style="background-color: #e63946;">

        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-12 text-white">
                    <div>
                        <h1 class=" text-white display-4"
                            style="padding-top: 200px;font-family: 'Noto Sans', sans-serif;">
                            Telles LPG

                        </h1>
                        <p style="font-size: 13pt;">100% Tamang timbang</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-12 text-center mt-4">
                    <h2 style="font-family: 'Noto Sans', sans-serif;">Fast and Free Delivery Pa</h2>
                    <p class="lead">Dekalidad at maayos na tangke</p>


                </div>
            </div>
            @include('card_home_lpg_types')
        </div>
    </div>
</body>
@include('layouts.conventional_footers')
</html>
