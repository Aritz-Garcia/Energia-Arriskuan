@extends('layouts.plantillaJolasa')

@section('title', 'Hasiera')

@section('content')

    <x-audio-player />

    @if (Auth::user()->id == $partida->id_erabiltzailea)
        <div id="hasieraDiv">
            <Hasiera urlimg={{ asset('images/hasiera.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}>
            </Hasiera>
        </div>

        @if ($berria)
            <div style="position: absolute;
                top: 40vh;
                left: 26%;
                width: 8%;
                height: 27vh;
                opacity: 0;" id="atea">
            </div>

            <div style="position: absolute;
                top: 37vh;
                left: 29.2%;
                width: 2%;
                height: 2vh;
                opacity: 0;" id="ateGainean">
            </div>

            @vite(["resources/js/tutorial.js"])

        @endif

        {{-- <div style="position: absolute;
            top: 40vh;
            left: 66%;
            width: 8%;
            height: 27vh;
            background-color:#fff;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 40vh;
            left: 26%;
            width: 8%;
            height: 27vh;
            background-color:#6f64ff;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 35.2vh;
            left: 45.1%;
            width: 4%;
            height: 10vh;
            background-color:#1143b1;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 43.5vh;
            left: 37%;
            width: 3%;
            height: 18vh;
            background-color:#58c8cc;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 36vh;
            left: 53.7%;
            width: 1.7%;
            height: 2vh;
            background-color:#cc5858;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 46.1vh;
            left: 50.1%;
            width: 7.3%;
            height: 10vh;
            background-color:#500191;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 37vh;
            left: 29.2%;
            width: 2%;
            height: 2vh;
            background-color:#fdf9d1;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 42vh;
            left: 37.7%;
            width: 1.3%;
            height: 1.3vh;
            background-color:#fdf9d1;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 36.8vh;
            left: 67.5%;
            width: 2.4%;
            height: 2.7vh;
            background-color:#fdf9d1;
            opacity: 0.8;">
            </div>

            <div style="position: absolute;
            top: 34vh;
            left: 46.3%;
            width: 1.8%;
            height: 1vh;
            background-color:#fdf9d1;
            opacity: 0.8;">
            </div> --}}
    @else
        <script>
            window.location.href = route('index');
        </script>
    @endif
@endsection
