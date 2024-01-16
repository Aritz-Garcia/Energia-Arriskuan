@extends('layouts.plantillaHasiera')

@section('title', 'Sotoa')

@section('content')

    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="sotoaDiv">
            <Sotoa urlimg={{ asset('images/sotoa.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Sotoa>
        </div>

        {{-- <div style="position: absolute;
            top: 36vh;
            left: 28.5%;
            width: 16%;
            height: 19vh;
            background-color:#fff;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 32vh;
            left: 56%;
            width: 4%;
            height: 15vh;
            background-color:#6f64ff;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 32.5vh;
            left: 45.1%;
            width: 9%;
            height: 10vh;
            background-color:#1143b1;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 42.5vh;
            left: 49.1%;
            width: 5%;
            height: 8vh;
            background-color:#1143b1;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 42.5vh;
            left: 45.1%;
            width: 4%;
            height: 9vh;
            background-color:#58c8cc;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 32vh;
            left: 61%;
            width: 8%;
            height: 13vh;
            background-color:#cc5858;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 29vh;
            left: 74%;
            width: 5%;
            height: 24vh;
            background-color:#500191;
            opacity: 0.8;">
        </div>

        <div style="position: absolute;
            top: 58vh;
            left: 28%;
            width: 14.5%;
            height: 15vh;
            background-color:#015c91;
            opacity: 0.8;">
        </div> --}}
    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif


@endsection
