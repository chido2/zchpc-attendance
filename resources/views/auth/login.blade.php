@extends('layouts.auth')

@section('content')   
<div class="container">
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-5 d-flex justify-content-center">
                <a href="index.html">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                </a>
            </div>
            
            
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
            
                <div class="card custom-card">
                <div class="card-body p-5">
                    <p class="h5 fw-semibold mb-2 text-center">Sign In</p>
                    <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome to ZCHPC !</p>
                    
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="email" class="form-label text-default">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" placeholder="email address" required autocomplete="email" autofocus>
                        
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="col-xl-12 mb-2">
                            <label for="password" class="form-label text-default d-block">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="password">
                                <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2" name="password" required autocomplete="current-password">
                                    <i class="ri-eye-off-line align-middle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-2">
                            <div class="text-end">
                                <a href="{{ route('password.request') }}" class="text-danger">{{ __('Forgot password?') }}</a>
                            </div>
                        </div>
                            
                           
                        </div>

                        <div class="col-xl-12 d-grid mt-2">
                            <button type="submit"   class="btn btn-lg btn-primary">
                                {{ __('Sign In') }}
                            </button>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>
                      
                    </div>

                    <div class="text-center">
                        <p class="fs-12 text-muted mt-3">Dont have an account? <a href="{{ route('register') }}" class="text-primary">{{ __('Sign Up') }}</a></p>
                    </div>

                    <div class="text-center my-3 authentication-barrier">
                        <span>OR</span>
                    </div>

                    <div class="btn-list text-center">
                        <button class="btn btn-icon btn-light">
                            <i class="ri-facebook-line fw-bold text-dark op-7"></i>
                        </button>

                        <button class="btn btn-icon btn-light">
                            <i class="ri-google-line fw-bold text-dark op-7"></i>
                        </button>

                        <button class="btn btn-icon btn-light">
                            <i class="ri-twitter-line fw-bold text-dark op-7"></i>
                        </button>
                    </div>
                </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

