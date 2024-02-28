@extends('layouts.plantillaJolasa')

@section('title', 'Klasea')

@section('content')

    {{-- <x-audio-player /> --}}


    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="patioaDiv">
            <Klasea urlimg={{ asset('images/salaFinal.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Klasea>
        </div>

        {{-- Atea --}}
        {{-- <div style="position: absolute;
            top: 13vh;
            left: 89%;
            width: 11%;
            height: 49vh;
            background-color:#fff;
            opacity: 0.8;">
        </div> --}}

        {{-- Ordenagailua --}}
        {{-- <div style="position: absolute;
            top: 46vh;
            left: 45%;
            width: 4%;
            height: 5vh;
            background-color:#79f792;
            opacity: 0.8;">
        </div> --}}

        {{-- Pantaila --}}
        {{-- <div style="position: absolute;
            top: 44vh;
            left: 3%;
            width: 7.5%;
            height: 10vh;
            background-color:#d5ed7f;
            opacity: 0.8;">
        </div> --}}

        {{-- Sua --}}
        {{-- <div style="position: absolute;
            top: 60vh;
            left: 75%;
            width: 7.5%;
            height: 10vh;
            background-color:#7fceed;
            opacity: 0.8;">
        </div> --}}

        {{-- Pizarrak --}}
        {{-- <div style="position: absolute;
            top: 38vh;
            left: 66%;
            width: 7.5%;
            height: 11.8vh;
            background-color:#ed7fd3;
            opacity: 0.8;">
        </div>
        <div style="position: absolute;
            top: 39vh;
            left: 25%;
            width: 6%;
            height: 10.5vh;
            background-color:#ed7fd3;
            opacity: 0.8;">
        </div> --}}

    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif

@endsection
