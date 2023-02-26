@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-12">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="email"
                                class="form-label ">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-4">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                     

                        <div class="mb-2">

                            <button type="submit" class="btn btn-danger col-12">
                                {{ __('Login') }}
                            </button>

                            <div class="text-center mt-3 mb-3" hidden>
                                <hr>Or login using Social Accounts</div>
                        </div>
                        <div hidden>


                            <a href="/auth/redirect/" class="btn btn-danger col-12">
                                <i class="fab fa-google" ></i> Login with Google
                            </a>
                            <a href="/facebook/auth/redirect" class="btn btn-primary col-12 mt-1">
                                <i class="fab fa-facebook" ></i> Login with Facebook
                            </a>

                        </div>
                        <div class="mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
