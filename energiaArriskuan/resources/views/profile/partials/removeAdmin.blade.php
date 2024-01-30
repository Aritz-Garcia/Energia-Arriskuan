<x-perfil-botton-quitarAdmin x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-perfilAdminUser-removeAdmin')">
    <p>Kendu adminstratzailea</p>
</x-perfil-botton-quitarAdmin>


<x-modal name="confirm-perfilAdminUser-removeAdmin" :show="$errors->profileRemoveAdmin->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.removeAdmin', $profile->id) }}" class="p-6">
        @csrf
        @method('patch')

        <input type="hidden" name="perfilaId" value="{{ $profile->id }}">

        <h2 class="text-xl font-medium text-[#fff]">
            Ziur zaude erabiltzaileari administratzaile rola kendu nahi diozula?
        </h2>

        <p class="mt-1 text-md testu-kolore-nagusia">
            Erabiltzaileari administratzaile rola kentzean, ezin ditzake partidak eta beste erabiltzaileen infomazioa ikusi eta aldatu.
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
