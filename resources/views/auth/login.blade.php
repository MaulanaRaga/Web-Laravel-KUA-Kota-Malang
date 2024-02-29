@extends('layouts.login-layout')

@section('content')
    <div class="wireframe-sign-up">
        <div class="div">
        <div class="overlap-group">
        <div class="input-field">
            <div class="input-field-2">
                <div class="wlcome-text">
                    <div class="logo"></div>
                    <div class="text-wrapper">Hello Welcome to</div>
                    <div class="text-wrapper">KUA Kota Malang 👋🏻</div>
                    <div class="frame"><p class="p">Enter the information you entered while registering</p></div>
                </div>
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-data">
                        <div class="frame-2">
                        <div class="div-2">
                            <div class="div-wrapper">
                            <label for="email" class="text-wrapper-2" for="input-1">{{ __('Email Admin') }}
                            </label></div>
                                <input id="input-1" placeholder="Email" type="email" class="name @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="div-2">
                            <div class="frame-3">
                            <label for="password" class="text-wrapper-2">
                                {{ __('Password') }}</label></div>

                            <div class="frame-4">
                                <input id="password" placeholder="Password" type="password" class="name @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>

                        <div class="frame-5">
                            <div class="remember-me">
                                    <input class="text-wrapper-4" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-wrapper-4" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        
                        
                                <div class="text">
                                @if (Route::has('password.request'))
                                <a class="text-wrapper-5" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif</div>
                        </div>
                        <div class="button-login-wrapper">
                            <div class="text-wrapper-6">
                                <button type="submit" class="button-login">
                                    {{ __('Login') }}
                                
                                    </div></div>
                            </button>
                        </div>
                    </div>
                    </form>
                <div class="button-google">
                    <img class="img" src="https://c.animaapp.com/GiiLmfjJ/img/icon-google.svg" />
                    <div class="text-wrapper-7">Sign in With Google</div>
                  </div>
                  <div class="button-facebook">
                    <img class="img" src="https://c.animaapp.com/GiiLmfjJ/img/icon-facebook-1.svg" />
                    <div class="text-wrapper-7">Sign in With Facebbok</div>
                  </div>
                </div>
                <img class="image" src="https://c.animaapp.com/GiiLmfjJ/img/image-58.png" />
            </div>
        </div>
    </div>

@endsection
