<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/fonts/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css%20bootstrap/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>

    <title> hello</title>

</head>
<div>
    <div class="container">

        <div class="row">
            <div style="width:799px;" class="bg-white mr-auto ml-auto">
                <div class="col-12">
                    <div class="text-center mt-3">
                        <img src="{{asset('assets/images/homepagebanner.png')}}" style="width: 91%; height: 150px;">
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
            <div style="width:799px;" class="bg-white mr-auto ml-auto">
                <div class="col-12">
                    <div class="bluecolor mr-auto ml-auto mt-5">
                        <div class=" ml-1 mr-5 pr-5 float-left">
                            <i class="fas fa-lock"></i>
                        </div>
                        <a href="#" class="ml-5">login</a>


                        <div class="small">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row pr-5 pt-1 pl-4">
                                    <label class=" col-6 ">UserCode:</label>
                                    <input type="number" name="code" class="col-6" required>
                                    <x-input-error :messages="$errors->get('code')" class="mt-2"/>

                                </div>
                                <br>
                                <div class="row pr-5 pt-1 pl-4">
                                    <label class="col-6">Password:</label>
                                    <input type="password" name="password" class="col-6" required>
                                    <br>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                </div>
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                               name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button class="buttonnn" type="submit">
                                        <i class="fas fa-check float-left" id="kero"></i>login
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div style="width:799px;" class="bg-white mr-auto ml-auto">
                <div class="col-12 blackcolor">
                    <h5>For Staff Members Only</h5>
                    <h5>
                        <u><a href="#">Download Students ClassList.</a></u>
                    </h5>
                </div>
            </div>
        </div>

    </div>
</div>
<footer>
    <div class="foot">
        Copyright © 2018| All Rights Reserved
    </div>
</footer>

@include('users.footer')


{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ml-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
