@extends('layouts.plantillaGameOver')

@section('title', 'IRABAZITA')

@section('content')

    <div class="w-screen h-screen sotoaPanelLetra gameOver absolute top-1/2 left-1/2">
        <p class="text-green-600 text-5xl">IRABAZITA</p>

        <a href="{{ route('index') }}" id="bottone1" class="md:mx-auto flex items-center text-[#010440]">
            <strong class="text-[#010440] font-rubik-bold">ITZULI</strong>
        </a>
    </div>

@endsection