<x-perfil-botton-eliminar x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-perfilAdminUser-deletion')">
    <p>Ezabatu kontua</p>
</x-perfil-botton-eliminar>

<x-modal name="confirm-perfilAdminUser-deletion" :show="$errors->profileDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroyAdmin') }}" class="p-6">
        @csrf
        @method('delete')

        <input type="hidden" name="perfilId" value="{{ $profile->id }}">

        <h2 class="text-xl font-medium text-[#fff]">
            Ziur zaude erabiltzailea ezabatu nahi duzula?
        </h2>

        <p class="mt-1 text-md testu-kolore-nagusia">
            Erabiltzailea ezabatzean, erabiltzailearen informazio guztia ezabatuko da.
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
