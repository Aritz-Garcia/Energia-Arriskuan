@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')

    <div class="absolute top-28 left-0 z-50">
        <a href="{{ route('admin', ['userId' => 1]) }}">
            <div class="ms-2 mt-2 px-5 p-3 text-center hover:brightness-0 hover:invert">
                <img src="{{ asset('images/irten-index.png') }}" alt="admin horrira joan" class="w-10">
            </div>
        </a>
    </div>

    <div
        class="flex flex-col items-center justify-center gap-10 py-16 sm:py-80 sm:flex-row sm:gap-3 md:gap-6 lg:gap-10 xl:gap-16 mx-20">

        @if (count($partidak) > 0)
            <table class="max-w-screen-md mx-auto text-sm text-left  rtl:text-right testu-kolore-nagusia border border-color-nagusia">
                <thead class="text-md text-[#ffffff] uppercase text-base atzekaldeko-kolore-oinarria">
                    <tr class="">
                        <th scope="col" class="px-6 py-3 border border-color-nagusia">
                            Erabiltzailea
                        </th>
                        <th scope="col" class="px-6 py-3 border border-color-nagusia">
                            Denbora
                        </th>

                        <th scope="col" class="px-6 py-3 border border-color-nagusia">
                            Irabazita
                        </th>
                        <th scope="col" class="px-6 py-3 border border-color-nagusia">
                            Ezabatu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partidak as $partida)
                        <tr class="atzekaldeko-kolore-oinarria border border-color-nagusia">
                            <td class="px-6 py-4 text-base border border-color-nagusia">
                                {{ $partida->erabiltzailea->erabiltzailea }}
                            </td>
                            @if ($partida->denbora == '00:00')
                                <td class="px-6 py-4 text-base border border-color-nagusia line-through">
                                    {{$partida->denbora}}
                                </td>
                            @else
                                <td class="px-6 py-4 text-base border border-color-nagusia">
                                    {{$partida->denbora}}
                                </td>
                            @endif

                            <td class="px-6 py-4 text-base border border-color-nagusia">
                                @if ($partida->irabazita == 1)
                                    Bai
                                @else
                                    Ez
                                @endif
                            </td>
                            <td class="px-6 py-4 border border-color-nagusia ">
                                <a href="#"><img class="w-10 h-10" src="{{ asset('images/borrar.png') }}"
                                        alt="borrar"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-xl text-center atzekaldeko-kolore-oinarria border border-color-nagusia testu-kolore-nagusia p-5">Ez daude partidarik
                bukatuta!</p>
        @endif
    </div>

@endsection
