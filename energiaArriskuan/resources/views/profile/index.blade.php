@extends('layouts.plantilla')

@section('title', 'Perfil')

@section('content')
    @auth
        @if (Auth::user()->id == $profila->id)
            {{-- Zure erab --}}
            <div class="text-white">
                {{-- Erab info --}}
                <div class="flex items-center mb-6">
                    <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia" class="m-2 h-32 w-32 rounded-full">
                    <div class="ms-4">
                        <p class="text-2xl">{{ $profila->name }}  {{ $profila->abizena }}</p>
                        <p>{{ $profila->erabiltzailea }}</p>
                        <p>{{ $profila->email }}</p>
                    </div>
                </div>

                {{-- Taula --}}
                <div class="border-solid border-2 border-black rounded-lg m-5 p-2 bg-gray-600">
                    <div class="flex justify-between">
                        <p class="font-bold mt-3">Partidak:</p>
                        <button class="border-solid border border-black rounded-lg p-2 mb-2 bg-green-900" @if($profila->partidas->contains('bukatuta', 0)) disabled @endif>Add</button>
                    </div>
                    <hr>
                    @if (count($profila->partidas) == 0)
                        <p>Ez duzu partidarik jokatu</p>
                    @else
                        <table class="table-fixed w-full">
                            @foreach ($profila->partidas as $partida)
                                <tr class="border-solid border-b border-white">
                                    @if ($partida->bukatuta == 0)
                                        {{-- Bukatu gabe --}}
                                        <td class="ps-2">Play / Ezabatu</td>
                                        @if ($partida->denbora == null)
                                            <td class="text-center py-4">00:00</td>
                                        @else
                                            <td class="text-center py-4">{{ $partida->denbora }}</td>
                                        @endif
                                        <td class="pe-2 text-right">
                                            <button class="border-solid border border-black rounded-lg p-2 bg-amber-500 text-black font-semibold w-auto sm:w-36">
                                                Bukatu Gabe
                                            </button>
                                        </td>
                                    @else
                                        {{-- Bukatuta --}}
                                        <td class="ps-2">Ezabatu</td>
                                        @if ($partida->irabazita == 0)
                                            {{-- Irabazi gabe --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4">00:00 - Tachado</td>
                                            @else
                                                <td class="text-center py-4">{{ $partida->denbora }} - Tachado</td>
                                            @endif

                                            <td class="pe-2 text-right">
                                                <button class="border-solid border border-black rounded-lg p-2 bg-red-700 text-black font-semibold w-auto sm:w-36">
                                                    Game Over
                                                </button>
                                            </td>
                                        @else
                                            {{-- Irabazita --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4">00:00</td>
                                            @else
                                                <td class="text-center py-4">{{ $partida->denbora }}</td>
                                            @endif

                                            <td class="pe-2 text-right">
                                                <button class="border-solid border border-black rounded-lg p-2 bg-green-900 text-black font-semibold w-auto sm:w-36">
                                                    Bukatuta
                                                </button>
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        @elseif (Auth::user()->rol == 1)
            {{-- Admin --}}
            <div class="text-white">
                {{-- Erab info --}}
                <div class="flex items-center mb-6">
                    <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia" class="m-2 h-32 w-32 rounded-full">
                    <div class="ms-4">
                        <p class="text-2xl">{{ $profila->name }}  {{ $profila->abizena }}</p>
                        <p>{{ $profila->erabiltzailea }}</p>
                        <p>{{ $profila->email }}</p>
                    </div>
                </div>

                {{-- Taula --}}
                <div class="border-solid border-2 border-black rounded-lg m-5 p-2">
                    <p class="font-bold mt-3 mb-2">Partidak:</p>
                    <hr>
                    @if (count($profila->partidas) == 0)
                        <p>Ez duzu partidarik jokatu</p>
                    @else
                        <table class="table-fixed w-full">
                            @foreach ($profila->partidas as $partida)
                                <tr class="border-solid border-b border-white">
                                    @if ($partida->bukatuta == 0)
                                        {{-- Bukatu gabe --}}
                                        <td class="ps-2">Play / Ezabatu</td>
                                        @if ($partida->denbora == null)
                                            <td class="text-center py-4">00:00</td>
                                        @else
                                            <td class="text-center py-4">{{ $partida->denbora }}</td>
                                        @endif
                                        <td class="pe-2 text-right">
                                            <button class="border-solid border border-black rounded-lg p-2 bg-amber-500 text-black font-semibold w-auto sm:w-36">
                                                Bukatu Gabe
                                            </button>
                                        </td>
                                    @else
                                        {{-- Bukatuta --}}
                                        <td class="ps-2">Ezabatu</td>
                                        @if ($partida->irabazita == 0)
                                            {{-- Irabazi gabe --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4">00:00 - Tachado</td>
                                            @else
                                                <td class="text-center py-4">{{ $partida->denbora }} - Tachado</td>
                                            @endif

                                            <td class="pe-2 text-right">
                                                <button class="border-solid border border-black rounded-lg p-2 bg-red-700 text-black font-semibold w-auto sm:w-36">
                                                    Game Over
                                                </button>
                                            </td>
                                        @else
                                            {{-- Irabazita --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4">00:00</td>
                                            @else
                                                <td class="text-center py-4">{{ $partida->denbora }}</td>
                                            @endif

                                            <td class="pe-2 text-right">
                                                <button class="border-solid border border-black rounded-lg p-2 bg-green-900 text-black font-semibold w-auto sm:w-36">
                                                    Bukatuta
                                                </button>
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        @else
            {{-- Erab normal beste user batean --}}
            <p>Ezin zara hemen egon</p>
        @endif
    @endauth
@endsection
