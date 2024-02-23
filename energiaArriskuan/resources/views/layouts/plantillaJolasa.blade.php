<!DOCTYPE html>
<html lang="eu">

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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/sass.css'])
    @vite('resources/js/fullScreen.js')
    @routes
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-rubik">

    @isset($header)
        <header>
            <div>
                {{ $header }}
            </div>
        </header>
    @endisset

    <main role="main" class="x-w-screen-xl">
        <div id="app">
            @yield("content")
        </div>
    </main>

    <div id="fullScreendivdiv" class="hidden">
        <div id="fullScreendiv">
            <div class="fixed bg-gray-900 p-5 text-center border-4 border-kolore-nagusia rounded-lg">
                <p class="text-white p-10 text-xl mb-5">Esperientzia hobea izateko, gaitu pantaila osoa. <br>Hau lortzeko botoia klikatu edo "F11" botoia klikatu.</p>
                <button id="fullScreenBtn" class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">Pantaila osoa</button>
            </div>
        </div>
    </div>

</body>

</html>
