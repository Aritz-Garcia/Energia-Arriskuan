@extends('layouts.plantilla')

@section('title', 'Perfil')

@section('content')
    @auth
        {{-- @if(Auth::user()->rol == 1) --}}
            {{-- Admin erab info --}}
        {{-- @else --}}
            {{-- Zure erab info --}}
        {{-- @endif --}}

        @if (Auth::user()->id == $profila->id)
            {{-- Zure erab --}}
            <div class="text-white">
                <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia" class="h-20">
                <p>Erabiltzailea: {{ $profila->id }}</p>
                <p>Erabiltzailea: {{ $profila->name }}</p>
                <p>Erabiltzailea: {{ $profila->erabiltzailea }}</p>
            </div>
        @elseif (Auth::user()->rol == 1)
            {{-- Admin --}}
            <div class="text-white">
                <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia" class="h-20">
                <p>Erabiltzailea: {{ $profila->id }}</p>
                <p>Erabiltzailea: {{ $profila->name }}</p>
                <p>Erabiltzailea: {{ $profila->erabiltzailea }}</p>
            </div>
        @else
            {{-- Erab normal beste user batean --}}
            <p>Ezin zara hemen egon</p>
        @endif


    @endauth
@endsection
