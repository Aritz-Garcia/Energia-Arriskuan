@extends('layouts.plantillaJolasa')

@section('title', 'Patioa')

@section('content')

    {{-- <x-audio-player /> --}}


    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="patioaDiv">
            <Patioa urlimg={{ asset('images/patio.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }} easteregg={{ asset('images/easter_egg/extraterrestre.png') }}></Patioa>
        </div>

        {{-- <div style="position: absolute;
            top: 45vh;
            left: 58%;
            width: 2%;
            height: 3vh;
            background-color:#fff;
            opacity: 0.8;">
        </div> --}}
        {{-- atea --}}
        {{-- <div style="position: absolute;
            top: 52vh;
            left: 87%;
            width: 7%;
            height: 18vh;
            background-color:#fff;
            opacity: 0.8;">
        </div> --}}

        {{-- Lurra sinboloak --}}
        {{-- <div style="position: absolute;
            top: 57vh;
            left: 32%;
            width: 8.2%;
            height: 28vh;
            background-color:#7af5d6;
            opacity: 0.8;">
        </div>
        <div style="position: absolute;
            top: 57vh;
            left: 40.2%;
            width: 10.8%;
            height: 13vh;
            background-color:#7af5d6;
            opacity: 0.8;">
        </div>
        <div style="position: absolute;
            top: 75vh;
            left: 40.2%;
            width: 46%;
            height: 10vh;
            background-color:#7af5d6;
            opacity: 0.8;">
        </div>
        <div style="position: absolute;
            top: 70vh;
            left: 43.7%;
            width: 42.5%;
            height: 5vh;
            background-color:#7af5d6;
            opacity: 0.8;">
        </div>
        <div style="position: absolute;
            top: 60vh;
            left: 67%;
            width: 19.2%;
            height: 10vh;
            background-color:#7af5d6;
            opacity: 0.8;">
        </div> --}}

        {{-- simbolo 1 --}}
        {{-- <div style="position: absolute;
            top: 71vh;
            left: 75%;
            width: 10%;
            height: 6vh;
            background-color:#ff0000;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 2 --}}
        {{-- <div style="position: absolute;
            top: 79vh;
            left: 82%;
            width: 5.5%;
            height: 5vh;
            background-color: #0400ff;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 3 --}}
        {{-- <div style="position: absolute;
            top: 60vh;
            left: 73%;
            width: 8%;
            height: 10vh;
            background-color: #37ff00;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 4 --}}
        {{-- <div style="position: absolute;
            top: 68vh;
            left: 34%;
            width: 6%;
            height: 13vh;
            background-color: #ff00bf;
            opacity: 0.3;">
        </div> --}}

        {{-- Sakibaloia 1 --}}
        {{-- <div style="position: absolute;
            top: 70vh;
            left: 40.2%;
            width: 3.5%;
            height: 5vh;
            background-color:#00e5ff;
            opacity: 0.8;">
        </div> --}}

        {{-- Sakibaloia 2 --}}
        {{-- <div style="position: absolute;
            top: 63vh;
            left: 51%;
            width: 2.5%;
            height: 4vh;
            background-color:#ff7700;
            opacity: 0.8;">
        </div> --}}

        {{-- Sakibaloia 3 --}}
        {{-- <div style="position: absolute;
            top: 65vh;
            left: 63%;
            width: 4%;
            height: 5vh;
            background-color:#4b3912;
            opacity: 0.8;">
        </div> --}}

        {{-- Panpina --}}
        {{-- <div style="position: absolute;
            top: 65vh;
            left: 53.6%;
            width: 2.9%;
            height: 5vh;
            background-color:#ffea00;
            opacity: 0.8;">
        </div> --}}

        {{-- zaborra --}}
        {{-- <div style="position: absolute;
            top: 45vh;
            left: 2%;
            width: 30%;
            height: 40vh;
            background-color: #ffffff;
            opacity: 0.8;">
        </div> --}}

        {{-- Kulunka --}}
        {{-- <div style="position: absolute;
            top: 43vh;
            left: 38%;
            width: 20%;
            height: 14vh;
            background-color: #ffffff;
            opacity: 0.8;">
        </div> --}}

    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif

@endsection
