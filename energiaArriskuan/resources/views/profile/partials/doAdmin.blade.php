<x-perfil-botton-hacerAdmin x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-perfilAdminUser-doAdmin')">
    <p>Adminstratzailea egin</p>
</x-perfil-botton-hacerAdmin>


<x-modal name="confirm-perfilAdminUser-doAdmin" :show="$errors->profileDoAdmin->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.doAdmin') }}" class="p-6">
        @csrf
        @method('patch')

        <input type="hidden" name="perfilId" value="{{ $profile->id }}">

        <h2 class="text-xl font-medium text-[#fff]">
            Ziur zaude erabiltzailea administratzailea egin nahi duzula?
        </h2>

        <p class="mt-1 text-md testu-kolore-nagusia">
            Erabiltzailea administratzailea egitean, partidak eta beste erabiltzaileen infomazioa ikusi eta aldatu ditzake.
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
