@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-12">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-2">
                            <label for="name" class="col-form-label ">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="password-confirm"
                                class=" col-form-label ">{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">


                        </div>


                        <div class="mt-2">
                            <div class="row">
                                <div class="col col-6">
                                    <label class=" col-form-label ">House no./Purok</label>
                                    <input type="text" class="form-control" name="address_house_num">

                                </div>
                                <div class="col col-6">
                                    <label class=" col-form-label ">Barangay</label>
                                    <input type="text" class="form-control" name="address_barangay">

                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col col-6">
                                    <label class=" col-form-label ">Town/City</label>
                                    <select class="form-select" aria-label="Town/City" name="address_town_city" >
                                        <option selected value="Villasis">Villasis</option>
                                        <option value="Rosales">Rosales</option>
                                        <option value="Urdaneta">Urdaneta</option>
                                        <option value="Santo Tomas">Santo Tomas</option>
                                        <option value="Binalonan">Binalonan</option>

                                    </select>
                                </div>

                                <div class="col col-6">
                                    <label for="phone_num" class=" col-form-label ">Phone number</label>
                                    <input id="phone_num" type="text" class="form-control" name="phone_num">
                                </div>
                            </div>
                        </div>


                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary col-12">
                                {{ __('Register') }}
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
