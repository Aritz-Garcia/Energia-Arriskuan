@extends('layouts.plantillaJolasa')

@section('title', 'Biltegia')

@section('content')
    <x-audio-player />

    @if (Auth::user()->id == $partida->id_erabiltzailea)
        <div id="biltegiaDiv">
            <Biltegia urlimg={{ asset('images/biltegia.png') }} :partida={{ $partida }}
                :pruebas={{ $partida->pruebas }}></Biltegia>
        </div>

        {{-- puerta --}}
        {{-- <div
            style="position: absolute;
            top: 40vh;
            left: 60%;
            width: 5.5%;
            height: 18vh;
            background-color:#fff;
            opacity: 0.5;">
        </div> --}}

        {{-- mesa (juego1) --}}
        {{-- <div
            style="position: absolute;
            top: 59vh;
            left: 34%;
            width: 18%;
            height: 16vh;
            background-color:#6f64ff;
            opacity: 0.5;">
        </div> --}}

        {{-- estantería 1 --}}
        {{-- <div
            style="position: absolute;
            top: 20vh;
            left: 1%;
            width: 18%;
            height: 55vh;
            background-color:#9dff00;
            opacity: 0.5;">
        </div> --}}

        {{-- estantería 2 --}}
        {{-- <div
            style="position: absolute;
            top: 35vh;
            left: 25%;
            width: 30%;
            height: 23vh;
            background-color:#b700ff;
            opacity: 0.5;">
        </div> --}}

        {{-- estantería 3 --}}
        {{-- <div
            style="position: absolute;
            top: 20vh;
            left: 74%;
            width: 14%;
            height: 40vh;
            background-color:#ff0000;
            opacity: 0.5;">
        </div> --}}

        {{-- suelo --}}
        {{-- <div
            style="position: absolute;
            top: 76vh;
            left: 34%;
            width: 35%;
            height: 15vh;
            background-color:#0004ff;
            opacity: 0.5;">
        </div> --}}

        {{-- exit --}}
        {{-- <div
            style="position: absolute;
            top: 23vh;
            left: 47%;
            width: 4%;
            height: 7vh;
            background-color:#eeff00;
            opacity: 0.5;">
        </div> --}}

        {{-- erlojua --}}
        {{-- <div
            style="position: absolute;
            top: 30.5vh;
            left: 60.5%;
            width: 3.5%;
            height: 4.5vh;
            background-color:#00ccff;
            opacity: 0.5;">
        </div> --}}
    @else
        <script>
            window.location.href = route('index');
        </script>
    @endif
@endsection
