@extends('layouts.app-login')

@section('content')
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">
                        {{ __('home.we_explore_the_new') }}<br/> {{ __('home.life_much_better') }}
                    </h1>
                    <img
                        src="{{ url('frontend/images/login-images.png') }}"
                        alt="Logo BXT"
                        class="w-75 d-none d-sm-flex"
                    />
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{ url('/') }}">
                                    <img
                                    src="{{ url('frontend/images/logo3@2x.png') }}"
                                    alt="Logo BXT"
                                    class="w-50 mb-4"
                                    />
                                </a>
                                @if ($password_wrong = Session::get('password_wrong'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $password_wrong }}</strong>
                                    </div>
                                @endif
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                {{-- email address --}}
                                <div class="form-group">
                                  <label for="email">{{ __('Email address') }}</label>
                                  <input
                                    type="email"
                                    class="form-control @error('email') is-invaild @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    aria-describedby="emailHelp"
                                />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                {{-- password --}}
                                <div class="form-group">
                                  <label for="password">{{ __('Password') }}</label>
                                  <input
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    id="password"
                                />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                {{-- remember --}}
                                <div class="form-group form-check">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="exampleCheck1"
                                />
                                  <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                  </label>
                                </div>

                                {{-- login tombol --}}
                                <button
                                    type="submit"
                                    class="btn btn-login btn-block">
                                    {{ __('Login') }}
                                </button>

                                {{--  register tombol  --}}
                                <p class="text-center mt-4">
                                    <a href="{{ route('register') }}">
                                        {{ __('Dont Have an Account ?') }}
                                    </a>
                                </p>

                                {{-- lupa password --}}
                                @if (Route::has('password.request'))
                                    <p class="text-center mt-4">
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Password') }}
                                        </a>
                                    </p>
                                @endif
                              </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
