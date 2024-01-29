@extends('layouts.plantillaLoginRegister')

@section('title', 'Erregistratu')

@section('content')

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div v-show="pausua == 1" class="pt-3">
            <h3 class="text-2xl font-bold testu-kolore-nagusia">Datu pertsonalak:</h3>
            <hr class="my-2 border-t-2 border-kolore-nagusia">

            <!-- Name -->
            {{-- <div class="pt-3">
                <div class="flex justify-between relative group">

                    <x-input-label for="name" :value="__('Name')" />
                    <div class="relative">
                        <img src="../public/images/informacion.png" class="h-6 cursor-pointer" id="infoIcon">
                        <p
                            class="hidden group-hover:inline absolute top-[-8px] left-[-300px] w-auto text-white p-2">

                            15 karaktere, letra handiak eta txikiak

                        </p>
                    </div>
                </div>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    v-model="erabiltzaileak.izena" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

            <!-- Name -->
            <div class="pt-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    v-model="erabiltzaileak.izena" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Abizena -->
            <div class="mt-4">
                <x-input-label for="abizena" :value="__('Abizena')" />
                <x-text-input id="abizena" class="block mt-1 w-full" type="text" name="abizena"
                    v-model="erabiltzaileak.abizena" :value="old('abizena')" required autofocus autocomplete="abizena" />
                <x-input-error :messages="$errors->get('abizena')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    v-model="erabiltzaileak.email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

        </div>

        <div v-show="pausua == 2" class="pt-9">
            <h3 class="text-2xl font-bold testu-kolore-nagusia">Erabiltzailea sortu:</h3>
            <hr class="my-2 border-t-2 border-kolore-nagusia">

            <!-- Erabiltzailea -->
            <div class="mt-4">
                <x-input-label for="erabiltzailea" :value="__('Erabiltzailea')" />
                <x-text-input id="erabiltzailea" class="block mt-1 w-full" type="text" name="erabiltzailea"
                    v-model="erabiltzaileak.erabiltzailea" :value="old('erabiltzailea')" required autofocus
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

            <x-primary-button class="ms-4" v-if="pausua == pausuakTotal">
                {{ __('Register') }}
            </x-primary-button>

        </div>
    </form>

@endsection
