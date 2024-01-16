@include('partials.menu')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
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

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-[#0BD904]"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>



</x-guest-layout>

@include('partials.footer')
