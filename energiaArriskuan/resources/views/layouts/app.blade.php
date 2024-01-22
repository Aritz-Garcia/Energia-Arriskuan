<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-rubik antialiased fotoFondoKontaktua">
        @include("partials.menu")

        <div class="min-h-screen">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class=" shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @include("partials.footer")

    </body>
</html>
