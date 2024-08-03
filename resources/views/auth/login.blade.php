@extends('welcome')

@section('title', 'Home Page')

@section('content')
    <div class="row ">
        <div class="col-md-5">
            <img src="cinemalogo.png" width="450" alt=""
                style=" position: relative;bottom: 50px;left: 35px;">
        </div>
        <div class="col-md-7">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div class="pt-5">
                    <div>
                        <x-input-label for="email" class="d-flex text-start" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full form-control text_data"  type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" style="color: red" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" class="d-flex text-start" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full form-control text_data" type="password" name="password"
                            required autocomplete="current-password" /> 

                        <x-input-error :messages="$errors->get('password')" style="color: red" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 d-flex text-start">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                   
                    <x-primary-button class="ms-3 btn btn-success btn-xl" style="width: 200px;border-radius: 20px;">
                        {{ __('Log in') }}
                    </x-primary-button>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a style="color: black;text-decoration:none" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
