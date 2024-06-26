@extends('layouts.plantillaIndex')

@section('title', 'Hasiera')

@section('content')

    <div class="min-h-screen flex items-center justify-center px-10 py-10">

    @if (session('isMobileDevice'))
        <x-modal name="confirm-mugikorra" :show="true" focusable>
            <div class="p-6">
                <h2 class="text-lg font-medium testu-kolore-nagusia">
                    Ezin da jolastu mugikor edo tabletekin.
                </h2>

                <p class="mt-1 text-sm text-gray-100">
                    Ezin da jolastu mugikor edo tabletekin. Mesedez, erabili ordenagailu bat.
                </p>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Itxi
                    </x-secondary-button>
                </div>
            </div>

        </x-modal>
    @endif

    <div class="min-h-screen flex items-center justify-center px-10 py-10">


        <div class="containerIndex max-w-screen-xl mx-auto text-center">

            <div class="items-center flex flex-col w-auto">

                <p class="text-xl font-rubik-bold">
                    2073an, baliabide fosilak agortuta, Lurra energia berriztagarrien mende dago. Eraso estralurtarrei aurre
                    egin
                    behar diegu, arlo honetan gure ezagutza lapurtu nahian. Txurdinaga LHII zentroari eraso ondoren, sistema
                    guztiak
                    deskonektatu ziren, planetako bizitza mehatxatuz. Energia berriztagarrietan aditu den talde batek
                    sistemak
                    berrezartzeko eta gizateria salbatzeko erronkak gainditu behar ditu.
                </p>

                @if (Auth::user() != null)
                <a href="{{ route('jolasa', Auth::user()->id) }}" id="bottone1" class="md:mx-auto flex items-center testu-kolore-oinarria">

                @else
                <a href="{{ route('jolasa', 0) }}" id="bottone1" class="md:mx-auto flex items-center testu-kolore-oinarria">
                @endif

                    <svg stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"
                        class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 13V9m-2 2h4m5-2v.001M18 12v.001m4-.334v5.243a3.09 3.09 0 0 1-5.854 1.382L16 18a3.618 3.618 0 0 0-3.236-2h-1.528c-1.37 0-2.623.774-3.236 2l-.146.292A3.09 3.09 0 0 1 2 16.91v-5.243A6.667 6.667 0 0 1 8.667 5h6.666A6.667 6.667 0 0 1 22 11.667Z">
                        </path>
                    </svg>

                    <strong class="sotoaPanelLetra text-2xl pl-3 testu-kolore-oinarria">JOLASTU</strong>

                </a>

            </div>
        </div>
    </div>

    {{-- <div id="tiempo" class="text-white"> --}}

    </div>

@endsection
