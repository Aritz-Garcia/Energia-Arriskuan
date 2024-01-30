@extends('layouts.plantillaLoginRegister')

@section('title', 'Saioa Hasi')

@section('content')

    {{-- TODO testu info --}}
    <div id="testuaInfo" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center overflow-hidden z-10">
        <div class="relative bg-white bg-opacity-90 p-6 rounded-lg">
            <button id="cerrarInfo" class="absolute top-0 right-2 text-3xl text-red-600">
                &times;
            </button>
            <div class="text-md">
                <p><b>Erabiltzailea: </b>Minuzkulaz idatzi behar da.</p>
                <p><b>Pasahitza: </b>Gutxienez 8 karaktere izan behar ditu.</p>
            </div>
        </div>
    </div>

    <div class="w-full max-w-sm sm:max-w-lg mt-4 px-6 py-2 my-20 formFondo shadow-md overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" class="relative" action="{{ route('login') }}">

            @csrf

            <div class="pt-3 absolute top-0 right-0" id="infoImg">
                <img src="{{ asset('images/informacion.png') }}" alt="informazioa" class="cursor-pointer">
            </div>


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

                <div class="relative">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button text-x id="showPassword" type="button" class="cursor-pointer testu-kolore-nagusia">
                            &#x1F441; <!-- Unicode character for an eye symbol -->
                        </button>
                    </div>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded testu-kolore-nagusia atzekaldeko-kolore-oinarria border-kolore-nagusia shadow-sm focus:ring-[#0BD904] "
                        name="remember">
                    <span class="ms-2 text-sm testu-kolore-nagusia">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-8 pb-3">
                @if (Route::has('password.request'))
                    <a class="testu-kolore-nagusia hover:text-[#fff] pr-10" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <a class="testu-kolore-nagusia hover:text-[#fff] pr-10" href="{{ route('register') }}">
                    {{ __('Ez zaude erregistratuta?') }}
                </a>

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>


@endsection
