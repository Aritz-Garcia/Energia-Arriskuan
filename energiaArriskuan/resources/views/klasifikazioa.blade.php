@extends('layouts.plantillaKlasifikazioa')

@section('title', 'Klasifikazioa')

@section('content')

    <div class="min-h-screen my-20 sm:my-40 px-10">
        <Klasifikazioa :partidak={{ $partidak }} :erabiltzaileak={{ $erabiltzaileak }} :probak={{ $probak }}></Klasifikazioa>

    </div>

@endsection
