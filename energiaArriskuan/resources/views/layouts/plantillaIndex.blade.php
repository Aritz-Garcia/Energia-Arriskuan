<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-rubik-bold fotoFondo min-h-screen">

    @include("partials.menu")

    @isset($header)
        <header>
            <div>
                {{ $header }}
            </div>
        </header>
    @endisset

    <main role="main" class="x-w-screen-xl">
        @yield("content")
    </main>

    @include("partials.footer")

</body>

</html>
