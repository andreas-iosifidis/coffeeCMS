@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>{{">"}}</span>
                        <span>Register</span>
                    </p>
                </div>

            </div>
        </div>

<section class="home-slider owl-carousel">
<div class="slider-item" style="background-image: url({{ asset('assets/images/bg_login.jpg') }});" >
        <div class="overlay"></div>
        <section class="ftco-section">
    <div class="container" style="margin-top:-2%; margin-left: 0%;">
        <div class="row">
            <div class="col-md-7 ftco-animate">
                <form method="POST" action="{{ route('register') }}" class="billing-form  p-3 p-md-5">
                    @csrf
                    <h3 class="mb-4 billing-heading">Register</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="username">{{ __('Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col mb-12">
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-mb-12">
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-mb-12">
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-mb-12">
                            <div class="form-group mt-4">
                                <div class="radio d-flex">

                                    <button type="submit" class="btn btn-primary py-3 px-4 ">
                                        {{ __('Register') }}
                                    </button>
                                    <div class="flex-column flex-grow-1 ">
                                        <div class="form-check  flex-end" style="margin-left:2%;">
                                            <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>
    </div>
</section>


@endsection