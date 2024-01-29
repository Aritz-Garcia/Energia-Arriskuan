<x-app-layout>
    <div class="absolute top-28 left-0 z-50">
        <a href="{{ route('profile.index', Auth::user()->id) }}">
            <div class="ms-2 mt-2 px-5 p-3 text-center hover:brightness-0 hover:invert">
                <img src="{{ asset('images/irten-index.png') }}" alt="admin horrira joan" class="w-10">
            </div>
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex items-center flex-col justify-center min-h-screen">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <hr class="border w-2/3 border-color-nagusia">

            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <hr class="border w-2/3 border-color-nagusia">

            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
