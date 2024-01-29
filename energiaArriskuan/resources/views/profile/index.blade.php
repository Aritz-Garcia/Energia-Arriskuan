@extends('layouts.plantillaKontaktua')

@section('title', 'Perfil')

@section('content')
    @auth
        <div class="my-28 mx-5">
            @if (Auth::user()->id == $profila->id)
                {{-- Zure erab --}}
                {{-- Erab info --}}
                <div class="flex flex-col justify-center items-center max-w-lg min-w-72 sm:min-w-72 mx-auto testu-kolore-nagusia border-2 border-color-nagusia hover:border-[#ffffff] hover:border-2 atzekaldeko-kolore-oinarria rounded-3xl py-7">

                    <div class="flex flex-col lg:flex-row justify-center items-center">

                        <!-- Profile Image -->
                        <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia"
                            class="m-2 h-36 w-36 rounded-full border-2 border-color-nagusia md:mr-4 md:mb-0">

                        <!-- Profile Details -->
                        <div class="m-4 text-center md:text-left">
                            <p class="text-3xl text-[#ffffff] p-1">{{ $profila->erabiltzailea }}</p>
                            <p class="p-1">{{ $profila->name }} {{ $profila->abizena }}</p>
                            <p class="p-1">{{ $profila->email }}</p>
                        </div>
                    </div>

                    <!-- Edit Button -->
                    <div class="mt-7 mb-4">
                        <a href="{{ route('profile.edit') }}"
                            class="block w-full md:w-auto hover:bg-white rounded-full atzekaldeko-kolore-nagusia py-3 px-8 text-base font-semibold testu-kolore-oinarria outline-none">Editatu
                        </a>
                    </div>
                </div>



                {{-- Taula --}}
                <div class="border-solid border-2 border-color-nagusia testu-kolore-nagusia min-w-72 sm:min-w-72 rounded-lg mt-10 p-2 atzekaldeko-kolore-oinarria">
                    <div class="flex justify-between py-4 items-center">
                        <p class="font-bold mt-3 mb-2 ml-2 text-2xl">Partidak:</p>

                        <form action="{{ route('jolasa', Auth::user()->id) }}">
                            <button
                                @if ($profila->partidas->contains('bukatuta', 0)) disabled class="flex items-center mr-4 border-2 border-[#ff3131] boton hover:border-[#ffffff] hover:text-[#ffffff] p-2 rounded-lg" @endif
                                class="flex items-center mr-4 border-2 border-color-nagusia boton hover:border-[#ffffff] hover:text-[#ffffff] p-2 rounded-lg">
                                <img src="{{ asset('images/anadir.png') }}" alt="Gehitu" class="h-9 w-9">
                            </button>
                        </form>
                    </div>
                    <hr>
                    @if (count($profila->partidas) == 0)
                        <p class="p-3">Ez duzu partidarik jokatu</p>
                    @else
                        <table class="table-fixed w-full">
                            @foreach ($profila->partidas as $partida)
                                <tr class="border-solid border-b border-white">
                                    @if ($partida->bukatuta == 0)
                                        {{-- Bukatu gabe --}}
                                        <td class="ps-2 flex flex-col lg:flex-row py-4">

                                            <form action="{{ route('jolasa', Auth::user()->id) }}" class=" mb-2">
                                                <button
                                                    class="flex items-center mr-4 border-2 border-color-nagusia boton hover:border-[#ffffff] hover:text-[#ffffff] p-2 rounded-lg">
                                                    <img src="{{ asset('images/play.png') }}" alt="Jolastu" class="h-9 w-9">
                                                </button>
                                            </form>

                                            @include('partida.partials.delete-partida-form', [
                                                'partida' => $partida,
                                            ])

                                        </td>
                                        @if ($partida->denbora == null)
                                            <td class="text-center py-4 text-xl">00:00</td>
                                        @else
                                            <td class="text-center py-4 text-xl">{{ $partida->denbora }}</td>
                                        @endif
                                        <td class="pe-2">
                                            <div class="flex justify-end content-center pr-1">
                                                <div
                                                    class="text-center border-solid border-2 border-[#daff33] rounded-lg p-2 testu-kolore-oinarria bg-[#daff33] font-semibold w-auto sm:w-36">
                                                    Bukatu Gabe
                                                </div>
                                            </div>
                                        </td>
                                    @else
                                        {{-- Bukatuta --}}
                                        <td class="ps-2 flex py-4">
                                            @include('partida.partials.delete-partida-form', [
                                                'partida' => $partida,
                                            ])
                                        </td>
                                        @if ($partida->irabazita == 0)
                                            {{-- Irabazi gabe --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4 text-xl"><del>00:00</del></td>
                                            @else
                                                <td class="text-center py-4 text-xl line-through">{{ $partida->denbora }}</td>
                                            @endif

                                            <td class="pe-2">
                                                <div class="flex justify-end content-center pr-1">
                                                    <div
                                                        class="text-center border-solid border-2 border-[#ff3131] rounded-lg p-2 testu-kolore-oinarria bg-[#ff3131] font-semibold w-auto sm:w-36">
                                                        Game Over
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            {{-- Irabazita --}}
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4 text-xl">00:00</td>
                                            @else
                                                <td class="text-center py-4 text-xl">{{ $partida->denbora }}</td>
                                            @endif

                                            <td class="pe-2">
                                                <div class="flex justify-end content-center pr-1">
                                                    <div
                                                        class="text-center border-solid border-2 border-color-nagusia rounded-lg p-2 testu-kolore-oinarria atzekaldeko-kolore-nagusia font-semibold w-auto sm:w-36">
                                                        Bukatuta
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            @elseif (Auth::user()->rol == 1)
                {{-- Admin --}}
                <div class="text-white">
                    {{-- Erab info --}}
                    <div
                        class="flex flex-col justify-center items-center max-w-sm min-w-sm mx-auto testu-kolore-nagusia border-2 border-color-nagusia hover:border-[#ffffff] hover:border-2 atzekaldeko-kolore-oinarria rounded-3xl py-7">
                        <div class="flex justify-center items-center">
                            <img src="{{ url(asset($profila->foto)) }}" alt="Argazkia"
                                class="hover:border-[#ffffff] m-2 h-36 w-36 rounded-full border-2 border-color-nagusia">
                            <div class="m-4">
                                <p class="text-3xl text-[#ffffff] p-1">{{ $profila->erabiltzailea }}</p>
                                <p class="p-1">{{ $profila->name }} {{ $profila->abizena }}</p>
                                <p class="p-1">{{ $profila->email }}</p>
                            </div>
                        </div>

                        @if (Auth::user()->rol == 1)

                        @include('profile.partials.deleteAdmin', [
                            'profile' => $profila,
                        ])

                        @endif
                    </div>

                    {{-- Taula --}}
                    <div class="border-solid border-2 border-color-nagusia testu-kolore-nagusia rounded-lg mt-10 p-2 atzekaldeko-kolore-oinarria">
                        <div class="flex justify-between py-4 items-center">
                            <p class="font-bold mt-3 mb-2 ml-2 text-2xl">Partidak:</p>
                        </div>
                        <hr>
                        @if (count($profila->partidas) == 0)
                            <p class="p-3">Ez duzu partidarik jokatu</p>
                        @else
                            <table class="table-fixed w-full">
                                @foreach ($profila->partidas as $partida)
                                    <tr class="border-solid border-b border-white">
                                        @if ($partida->bukatuta == 0)
                                            {{-- Bukatu gabe --}}
                                            <td class="ps-2 flex py-4">

                                            </td>
                                            @if ($partida->denbora == null)
                                                <td class="text-center py-4 text-xl">00:00</td>
                                            @else
                                                <td class="text-center py-4 text-xl">{{ $partida->denbora }}</td>
                                            @endif
                                            <td class="pe-2">
                                                <div class="flex justify-end content-center pr-1">
                                                    <div
                                                        class="text-center border-solid border-2 border-[#daff33] rounded-lg p-2 testu-kolore-oinarria bg-[#daff33] font-semibold w-auto sm:w-36">
                                                        Bukatu Gabe
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            {{-- Bukatuta --}}
                                            <td class="ps-2 flex py-4">
                                                @include('partida.partials.delete-partida-form', [
                                                    'partida' => $partida,
                                                ])
                                            </td>
                                            @if ($partida->irabazita == 0)
                                                {{-- Irabazi gabe --}}
                                                @if ($partida->denbora == null)
                                                    <td class="text-center py-4 text-xl"><del>00:00</del></td>
                                                @else
                                                    <td class="text-center py-4 text-xl line-through">{{ $partida->denbora }}
                                                    </td>
                                                @endif

                                                <td class="pe-2">
                                                    <div class="flex justify-end content-center pr-1">
                                                        <div
                                                            class="text-center border-solid border-2 border-[#ff3131] rounded-lg p-2 testu-kolore-oinarria bg-[#ff3131] font-semibold w-auto sm:w-36">
                                                            Game Over
                                                        </div>
                                                    </div>
                                                </td>
                                            @else
                                                {{-- Irabazita --}}
                                                @if ($partida->denbora == null)
                                                    <td class="text-center py-4 text-xl">00:00</td>
                                                @else
                                                    <td class="text-center py-4 text-xl">{{ $partida->denbora }}</td>
                                                @endif

                                                <td class="pe-2">
                                                    <div class="flex justify-end content-center pr-1">
                                                        <div
                                                            class="text-center border-solid border-2 border-color-nagusia rounded-lg p-2 testu-kolore-oinarria atzekaldeko-kolore-nagusia font-semibold w-auto sm:w-36">
                                                            Bukatuta
                                                        </div>
                                                    </div>
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
                {{ route('index') }}
            @endif
        </div>
    @endauth
@endsection
