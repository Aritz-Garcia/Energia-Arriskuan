@include("partials.menu")
<x-guest-layout>

    <div id="registro">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div v-show="pausua == 1">
                <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300">Datu pertsonalak:</h3>
                <hr class="my-2">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" v-model="erabiltzaileak.izena" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Abizena -->
                <div class="mt-4">
                    <x-input-label for="abizena" :value="__('Abizena')" />
                    <x-text-input id="abizena" class="block mt-1 w-full" type="text" name="abizena" v-model="erabiltzaileak.abizena" :value="old('abizena')" required autofocus autocomplete="abizena" />
                    <x-input-error :messages="$errors->get('abizena')" class="mt-2" />
                </div>

                <!-- Erabiltzailea -->
                <div class="mt-4">
                    <x-input-label for="erabiltzailea" :value="__('Erabiltzailea')" />
                    <x-text-input id="erabiltzailea" class="block mt-1 w-full" type="text" name="erabiltzailea" v-model="erabiltzaileak.erabiltzailea" :value="old('erabiltzailea')" required autofocus autocomplete="erabiltzailea" />
                    <x-input-error :messages="$errors->get('erabiltzailea')" class="mt-2" />
                </div>
            </div>

            <div v-show="pausua == 2">
                <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300">Erabiltzaileak sortu:</h3>
                <hr class="my-2">
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" v-model="erabiltzaileak.email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Argazia -->
                <div class="mt-4">
                    <x-input-label for="foto" :value="__('Argazkia - Aukerazkoa')" />
                    <input type="file" name="foto" id="foto" accept="image/*" @change="argazkiaBarruan">
                    <x-input-error :messages="$errors->get('foto')" class="mt-2" />
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

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-bad-primary-button class="me-4" v-if="pausua == pausuakTotal" @click.prevent="atzera">
                    {{ __('Atzera') }}
                </x-bad-primary-button>

                <a class="underline text-sm text-gray-600 text-center dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4" v-if="pausua == pausuakTotal">
                    {{ __('Register') }}
                </x-primary-button>

                <x-primary-button class="ms-4" v-if="pausua != pausuakTotal" @click.prevent="aurrera">
                    {{ __('Jarraitu') }}
                </x-primary-button>
            </div>
        </form>

        {{-- Dialogo que al te advierte si quieres ir para atras o no porque la foto se borra si vas para atras --}}
        {{-- <div id="dialog" class="hidden fixed inset-0 flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg">
                <h2 class="text-xl font-bold mb-4">Kontuz</h2>
                <p>Adi, atzera joatean aukeratutako argazkia ezabatuko da eta berriro sartu beharko da. Ziur zaude atzera joan nahi duzula?</p>
                <div class="flex justify-end mt-4">
                    <button @click.prevent="dialogoItxi" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Ez
                    </button>
                    <button @click.prevent="atzera" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Bai
                    </button>
                </div>
            </div>
        </div> --}}
    </div>


    @vite('resources/js/vue/registro.js')
</x-guest-layout>

@include("partials.footer")
