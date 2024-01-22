@extends('layouts.plantillaJolasa')

@section('title', 'Patioa')

@section('content')

    @if(Auth::user()->id == $partida->id_erabiltzailea)
        <div id="patioaDiv">
            <Patioa urlimg={{ asset('images/patio.png') }} :partida={{ $partida }} :pruebas={{ $partida->pruebas }}></Patioa>
        </div>

        {{-- atea --}}
        {{-- <div style="position: absolute;
            top: 52vh;
            left: 87%;
            width: 7%;
            height: 18vh;
            background-color:#fff;
            opacity: 0.5;">
        </div> --}}

        {{-- simbolo 1 --}}
        {{-- <div style="position: absolute;
            top: 71vh;
            left: 76.5%;
            width: 6%;
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
            top: 62vh;
            left: 75%;
            width: 3.5%;
            height: 5vh;
            background-color: #37ff00;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 4 --}}
        {{-- <div style="position: absolute;
            top: 70vh;
            left: 36%;
            width: 3.5%;
            height: 5vh;
            background-color: #ff00bf;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 5 --}}
        {{-- <div style="position: absolute;
            top: 70vh;
            left: 40.2%;
            width: 3.5%;
            height: 5vh;
            background-color:#00e5ff;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 6 --}}
        {{-- <div style="position: absolute;
            top: 63vh;
            left: 51%;
            width: 2.5%;
            height: 4vh;
            background-color:#ff7700;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 7 --}}
        {{-- <div style="position: absolute;
            top: 65vh;
            left: 53.6%;
            width: 2.9%;
            height: 5vh;
            background-color:#ffea00;
            opacity: 0.3;">
        </div> --}}

        {{-- simbolo 8 --}}
        {{-- <div style="position: absolute;
            top: 65vh;
            left: 63%;
            width: 4%;
            height: 5vh;
            background-color:#4b3912;
            opacity: 0.7;">
        </div> --}}

    @else

        <script>
            window.location.href = route('index');
        </script>

    @endif

@endsection
