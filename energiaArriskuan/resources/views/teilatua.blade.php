@extends('layouts.plantillaHasiera')

@section('title', 'Teilatua')

@section('content')

    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="hasieraDiv">
            <Hasiera urlimg={{ asset('images/teilatua.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Hasiera>
        </div>

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
            top: 43vh;
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
            </div> --}}
    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif


@endsection
