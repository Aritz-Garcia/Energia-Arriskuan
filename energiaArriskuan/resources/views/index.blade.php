@extends('layouts.plantillaIndex')

@section('title', 'Hasiera')

@section('content')

    <div class="containerIndex items-center flex flex-col w-auto py-14 px-16 md:py-40">

        <p class="text-xl">
            2073an, baliabide fosilak agortuta, Lurra energia berriztagarrien mende dago. Eraso estralurtarrei aurre egin behar diegu, arlo honetan gure ezagutza lapurtu nahian. Txurdinaga LHII zentroari eraso ondoren, sistema guztiak deskonektatu ziren, planetako bizitza mehatxatuz. Energia berriztagarrietan aditu den talde batek sistemak berrezartzeko eta gizateria salbatzeko erronkak gainditu behar ditu.
        </p>

        <a href="{{ route('jolasa') }}" id="bottone1" class="md:mx-auto"><strong>JOLASTU</strong></a>

    </div>

@endsection
