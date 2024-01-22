<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex items-center flex-col justify-center min-h-screen">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <hr class="border w-2/3 border-[#0bd904]">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <hr class="border w-2/3 border-[#0bd904]">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg flex justify-center">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
