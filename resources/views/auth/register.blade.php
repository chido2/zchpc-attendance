@extends('layouts.auth')

@section('content')

<div class="container-lg">
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-5 d-flex justify-content-center">
                <a href="index.html">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                </a>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf    

            <div class="card custom-card">
                <div class="card-body p-5">
                    <p class="h5 fw-semibold mb-2 text-center">Sign Up</p>
                    <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome to ZCHPC. Join us by creating a free account !</p>
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="name" class="form-label text-default">{{ __('Name') }}</label>
                            <input  type="text" class="form-control form-control-lg" id="name" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="col-xl-12">
                            <label for="email" class="form-label text-default">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control form-control-lg" id="email"  name="email" value="{{ old('email') }}"  placeholder="Email Address" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>  

                         <div class="col-xl-12">
                            <label for="password" class="form-label text-default">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="password"  required autocomplete="new-password">
                                <button class="btn btn-light" onclick="createpassword('password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                        <div class="col-xl-12 mb-2">
                            <label for="password-confirm" class="form-label text-default">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <input type="password" class="form-control form-control-lg" id="password-confirm" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                                <button class="btn btn-light" onclick="createpassword('password',this)" type="button" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                            </div>  

                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                    By creating a account you agree to our <a href="terms_conditions.html" class="text-success"><u>Terms & Conditions</u></a> and <a class="text-success"><u>Privacy Policy</u></a>
                                </label>
                            </div>
                        </div>

                        <div class="col-xl-12 d-grid mt-2">
                            {{--  <button class="btn btn-lg btn-primary">{{ __('Create Account') }}</button>  --}}

                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>

                        </div>
                    </div> 

                    <div class="text-center">
                        <p class="fs-12 text-muted mt-3">Already have an account? <a href= "{{ route('login') }}" class="text-primary">{{ __('Sign in') }}</a></p>
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