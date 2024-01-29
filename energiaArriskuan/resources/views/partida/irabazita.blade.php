@extends('layouts.plantillaGameOver')

@section('title', 'IRABAZITA')

@section('content')

    <x-audio-irabazi/>

    <div class="w-screen h-screen sotoaPanelLetra gameOver absolute top-1/2 left-1/2">
        <p class="text-green-600 text-5xl">IRABAZITA</p>
        <p class="font-digital-regular text-green-600 text-3xl mt-4">Zorionak. Energia-sistemak berrezartzea lortu duzu. <br>Zuri ezker pertsona asko bizirik mantendu dira. Eskerrik asko guztiagatik.</p>

        <a href="{{ route('index') }}" id="bottone1" class="md:mx-auto flex items-center testu-kolore-oinarria">
            <strong class="testu-kolore-oinarria font-rubik-bold">ITZULI</strong>
        </a>
    </div>

@endsection
