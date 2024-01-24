@extends('layouts.plantillaLoginRegister')

@section('title', 'Saioa Hasi')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" class="relative" action="{{ route('login') }}">

        @csrf

        {{-- <div class="pt-3 absolute top-0 right-0"> --}}

        {{-- <div class="group pt-3 absolute top-0 right-0">
            <img src="../public/images/informacion.png" alt="informazioa" class="cursor-pointer">
            <div class="hidden group-hover:block absolute w-44 top-3 right-0 bg-white p-4 shadow-md">
                a: aaaaaaaaaaaa <br>
                b: bbbbbbbbbbbb
            </div>
        </div> --}}


        <!-- Erabiltzailea -->
        <div class="pt-3">
            <x-input-label for="erabiltzailea" :value="__('Erabiltzailea')" />
            <x-text-input id="erabiltzailea" class="block mt-1 w-full" type="text" name="erabiltzailea" :value="old('erabiltzailea')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('erabiltzailea')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded text-[#0BD904] bg-[#010440] border-[#0BD904] shadow-sm focus:ring-[#0BD904] "
                    name="remember">
                <span class="ms-2 text-sm text-[#0BD904]">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-8 pb-3">
            @if (Route::has('password.request'))
                <a class="text-[#0BD904] hover:text-[#fff] pr-10" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <a class="text-[#0BD904] hover:text-[#fff] pr-10" href="{{ route('register') }}">
                {{ __('Ez zaude erregistratuta?') }}
            </a>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>


@endsection
