@extends('layouts.plantillaKlasifikazioa')

@section('title', 'Klasifikazioa')

@section('content')

    <div class="min-h-screen px-10">
        <Klasifikazioa :partidak={{ $partidak }} :erabiltzaileak={{ $erabiltzaileak }} :probak={{ $probak }}></Klasifikazioa>

    </div>

@endsection
