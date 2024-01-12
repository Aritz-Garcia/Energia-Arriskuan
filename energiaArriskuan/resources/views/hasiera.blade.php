@extends('layouts.plantillaHasiera')

@section('title', 'Hasiera')

@section('content')

    <img src="{{asset('images/hasiera.png')}}" id="imagenClickable" alt="Img" style="width: 100%; height:100vh">

    {{-- <div style="position: absolute;
    top: 40vh;
    left: 66%;
    width: 9%;
    height: 27vh;
    background-color:#fff">
    </div>

    <div style="position: absolute;
    top: 40vh;
    left: 26%;
    width: 8%;
    height: 27vh;
    background-color:#6f64ff;
    opacity: 0.8;">
    </div> --}}

    @vite('resources/js/clickarImagenes/puerta1.js')

    <div id="juego3div" class="hidden">
        <div id="juego3">

        </div>
    </div>


@endsection
