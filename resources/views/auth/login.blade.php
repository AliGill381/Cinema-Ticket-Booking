@extends('welcome')

@section('title', 'Home Page')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="cinemalogo.png" class="img-fluid" alt="Cinema Logo">
                </div>
            </div>
            <div class="col">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body p-5">
                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label d-flex text-start">{{ __('Email') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="email" type="email" name="email"
                                    class="form-control modern-input @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label d-flex text-start">{{ __('Password') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="password" type="password" name="password"
                                    class="form-control modern-input @error('password') is-invalid @enderror" required
                                    autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-4 d-flex align-items-center">
                                <input id="remember_me" type="checkbox" class="form-check-input me-2" name="remember">
                                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-lg" style="border-radius: 20px;">
                                    {{ __('Log in') }}
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="btn btn-link text-muted">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
@endsection
