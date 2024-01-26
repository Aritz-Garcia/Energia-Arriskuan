<section class="space-y-6">
    {{-- <header>
        <h2 class="text-2xl font-medium text-gray-100">
            Partida Ezabatu 2
        </h2>

        <p class="mt-1 text-sm text-gray-100">
            Partida ezabatzean, partida eta partida horretan dauden datu guztiak ezabatuko dira.
        </p>
    </header> --}}

    <x-partida-tabla-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-partida-deletion')">
        <img src="{{ asset('images/borrar.png') }}" alt="Ezabatu"
            class="h-9 w-9">
    </x-partida-tabla-button>
    {{-- <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Partida Ezabatu</x-danger-button> --}}

    <x-modal name="confirm-partida-deletion" :show="$errors->partidaDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('partida.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <input type="hidden" name="partidaId" value="{{ $partida->id }}">

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Ziur zaude partida ezabatu nahi duzula?
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Partida ezabatzean, partida eta partida horretan dauden datu guztiak ezabatuko dira.
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Ez
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    Bai
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
