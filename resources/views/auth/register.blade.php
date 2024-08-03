@extends('welcome')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="cinemalogo.png" class="img-fluid" alt="Cinema Logo">
                </div>
            </div>
            <div class="col">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body p-5">
                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label d-flex text-start">{{ __('Name') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="name" type="text" name="name" class="form-control modern-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label d-flex text-start">{{ __('Email') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="email" type="email" name="email" class="form-control modern-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="username">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label d-flex text-start">{{ __('Password') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="password" type="password" name="password" class="form-control modern-input @error('password') is-invalid @enderror" required autocomplete="new-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label d-flex text-start">{{ __('Confirm Password') }} <span class="ms-1" style="color: rgb(255, 17, 0)"> *</span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control modern-input @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-lg" style="border-radius: 20px;">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="{{ route('login') }}" class="btn btn-link text-muted">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
