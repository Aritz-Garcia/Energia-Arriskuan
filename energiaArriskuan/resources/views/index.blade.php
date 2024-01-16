@extends('layouts.plantillaIndex')

@section('title', 'Hasiera')

@section('content')

    <div class="min-h-screen flex items-center justify-center px-10">

        <div class="containerIndex max-w-screen-xl mx-auto text-center">

            <div class="items-center flex flex-col w-auto">



                <p class="text-xl">
                    2073an, baliabide fosilak agortuta, Lurra energia berriztagarrien mende dago. Eraso estralurtarrei aurre
                    egin
                    behar diegu, arlo honetan gure ezagutza lapurtu nahian. Txurdinaga LHII zentroari eraso ondoren, sistema
                    guztiak
                    deskonektatu ziren, planetako bizitza mehatxatuz. Energia berriztagarrietan aditu den talde batek
                    sistemak
                    berrezartzeko eta gizateria salbatzeko erronkak gainditu behar ditu.
                </p>

                <a href="{{ route('jolasa') }}" id="bottone1" class="md:mx-auto flex items-center text-[#010440]">

                    <svg stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"
                        class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 13V9m-2 2h4m5-2v.001M18 12v.001m4-.334v5.243a3.09 3.09 0 0 1-5.854 1.382L16 18a3.618 3.618 0 0 0-3.236-2h-1.528c-1.37 0-2.623.774-3.236 2l-.146.292A3.09 3.09 0 0 1 2 16.91v-5.243A6.667 6.667 0 0 1 8.667 5h6.666A6.667 6.667 0 0 1 22 11.667Z">
                        </path>
                    </svg>

                    <strong class="pl-3 text-[#010440]">JOLASTU</strong>

                </a>

            </div>
        </div>
    </div>

    {{-- <div id="tiempo" class="text-white"> --}}

    </div>

@endsection
