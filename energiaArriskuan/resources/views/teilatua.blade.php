@extends('layouts.plantillaHasiera')

@section('title', 'Teilatua')

@section('content')

    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="teilatuaDiv">
            <Teilatua urlimg={{ asset('images/teilatua.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Teilatua>
        </div>

        {{-- puerta --}}
        {{-- <div style="position: absolute;
            top: 48vh;
            left: 27.5%;
            width: 4%;
            height: 13vh;
            background-color:#500191;
            opacity: 0.8;">
        </div> --}}

        {{-- juego --}}
        {{-- <div style="position: absolute;
            top: 35vh;
            left: 31.5%;
            width: 12%;
            height: 32vh;
            background-color:#51ff00;
            opacity: 0.5;">
        </div> --}}

    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif


@endsection
