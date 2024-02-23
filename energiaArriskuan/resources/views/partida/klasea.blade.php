@extends('layouts.plantillaJolasa')

@section('title', 'Klasea')

@section('content')

    {{-- <x-audio-player /> --}}


    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="patioaDiv">
            <Klasea urlimg={{ asset('images/salaFinal.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Klasea>
        </div>

        {{-- atea --}}
        {{-- <div style="position: absolute;
            top: 13vh;
            left: 89%;
            width: 11%;
            height: 49vh;
            background-color:#fff;
            opacity: 0.8;">
        </div> --}}

        {{-- ordenagailua --}}
        {{-- <div style="position: absolute;
            top: 46vh;
            left: 45%;
            width: 4%;
            height: 5vh;
            background-color:#fff;
            opacity: 0.8;">
        </div> --}}

    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif

@endsection
