<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @routes
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-rubik antialiased fotoFondo">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-16">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full max-w-sm sm:max-w-lg mt-4 px-6 py-2 my-20 formFondo shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
    </body>
</html>
