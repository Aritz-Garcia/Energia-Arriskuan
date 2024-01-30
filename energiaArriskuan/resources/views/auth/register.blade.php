@extends('layouts.plantillaLoginRegister')

@section('title', 'Erregistratu')

@section('content')

    <div id="testuaInfo" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center overflow-hidden z-10">
        <div class="relative bg-white bg-opacity-90 p-6 rounded-lg">
            <button id="cerrarInfo" class="absolute top-0 right-2 text-3xl text-red-600">
                &times;
            </button>
            <div class="text-md">
                <p><b>Izena: </b>Derrigorrezkoa da.</p>
                <p><b>Abizena: </b>Derrigorrezkoa da.</p>
                <p><b>Email: </b>Derrigorrezkoa da.</p>
                <p><b>Erabiltzailea: </b>Derrigorrezkoa da. Minuzkulaz gordeko da.</p>
                <p><b>Pasahitza: </b>Derrigorrezkoa da. Gutxienez 8 karaktere izan behar ditu.</p>
            </div>
        </div>
    </div>

    <div class="w-full max-w-sm sm:max-w-lg mt-4 px-6 py-2 my-20 formFondo shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" class="relative" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="pt-3 absolute top-0 right-0" id="infoImg">
                <img src="{{ asset('images/informacion.png') }}" alt="informazioa" class="cursor-pointer">
            </div>

            <div class="pt-3">
                <h3 class="text-2xl font-bold testu-kolore-nagusia">Datu pertsonalak:</h3>
                <hr class="my-2 border-t-2 border-kolore-nagusia">

                <!-- Name -->
                <div class="pt-3">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Abizena -->
                <div class="mt-4">
                    <x-input-label for="abizena" :value="__('Abizena')" />
                    <x-text-input id="abizena" class="block mt-1 w-full" type="text" name="abizena" :value="old('abizena')" required autofocus autocomplete="abizena" />
                    <x-input-error :messages="$errors->get('abizena')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

            </div>

            <div class="pt-9">
                <h3 class="text-2xl font-bold testu-kolore-nagusia">Erabiltzailea sortu:</h3>
                <hr class="my-2 border-t-2 border-kolore-nagusia">

                <!-- Erabiltzailea -->
                <div class="mt-4">
                    <x-input-label for="erabiltzailea" :value="__('Erabiltzailea')" />
                    <x-text-input id="erabiltzailea" class="block mt-1 w-full" type="text" name="erabiltzailea" :value="old('erabiltzailea')" required autofocus
                        autocomplete="erabiltzailea" />
                    <x-input-error :messages="$errors->get('erabiltzailea')" class="mt-2" />
                </div>


                <!-- Argazia -->
                <div class="mt-4 grid w-full items-center gap-1.5">
                    <x-input-label for="foto" :value="__('Argazkia - Aukerazkoa')" />
                    <input
                        class="flex w-full rounded-md border border-kolore-nagusia file:p-2 file:text-black border-input atzekaldeko-kolore-oinarria text-md text-white file:border-0 file:bg-[#0BD904] file:text-md file:font-medium"
                        type="file" id="picture" name="foto" accept="image/*" />

                    <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <div class="relative">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button text-x id="showPassword" type="button" class="cursor-pointer testu-kolore-nagusia">
                                &#x1F441; <!-- Unicode character for an eye symbol -->
                            </button>
                        </div>
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <div class="relative">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />

                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button text-x id="showPassword2" type="button" class="cursor-pointer testu-kolore-nagusia">
                                &#x1F441; <!-- Unicode character for an eye symbol -->
                            </button>
                        </div>
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-between mt-8 pb-3 pt-3">

                <a class="testu-kolore-nagusia hover:text-[#fff]" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>

            </div>
        </form>
    </div>

@endsection
