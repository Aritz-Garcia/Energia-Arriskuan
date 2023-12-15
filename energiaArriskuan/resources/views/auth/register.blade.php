<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
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

        <!-- Erabiltzailea -->
        <div class="mt-4">
            <x-input-label for="erabiltzailea" :value="__('Erabiltzailea')" />
            <x-text-input id="erabiltzailea" class="block mt-1 w-full" type="text" name="erabiltzailea" :value="old('erabiltzailea')" required autofocus autocomplete="erabiltzailea" />
            <x-input-error :messages="$errors->get('erabiltzailea')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Argazia -->
        {{-- <div class="mt-4">
            <x-input-label for="foto" :value="__('Argazkia')" />
            <x-text-input id="foto" class="block mt-1 w-full" type="text" name="foto" :value="old('foto')" required autofocus autocomplete="foto" />
            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
        </div> --}}

        {{-- Rol --}}
        {{-- <div class="mt-4">
            <x-input-label for="rol" :value="__('Rola')" />
            <x-text-input id="rol" class="block mt-1 w-full" type="text" name="rol" :value="old('rol')" required autofocus autocomplete="rol" />
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
