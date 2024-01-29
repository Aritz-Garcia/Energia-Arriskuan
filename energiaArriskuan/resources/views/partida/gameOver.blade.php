@extends('layouts.plantillaGameOver')

@section('title', 'Game Over')

@section('content')

    <x-audio-gameover/>

    <div class="w-screen h-screen sotoaPanelLetra gameOver absolute top-1/2 left-1/2">
        <p class="text-red-600 text-5xl">Game Over</p>
        <p class="font-digital-regular text-red-600 text-3xl mt-4">Ezin izan duzu energia-sistemak berrezartu. <br>Denbora bukatu zaizu eta ezin izan zara bizirik mantendu.</p>

        <a href="{{ route('index') }}" id="bottone1" class="md:mx-auto flex items-center testu-kolore-oinarria">
            <strong class="testu-kolore-oinarria font-rubik-bold">ITZULI</strong>
        </a>
    </div>

@endsection
