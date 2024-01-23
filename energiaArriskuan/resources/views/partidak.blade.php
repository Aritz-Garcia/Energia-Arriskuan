@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')

    <div class="flex flex-col items-center justify-center gap-10 py-16 sm:py-72 sm:flex-row sm:gap-3 md:gap-6 lg:gap-10 xl:gap-16 mx-20">

        @if (count($partidak) > 0)
            <table class="max-w-screen-md mx-auto text-sm text-left  rtl:text-right text-[#0BD904] border border-[#0BD904]">
                <thead class="text-md text-[#ffffff] uppercase text-base bg-[#010440]">
                    <tr class="">
                        <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                            Erabiltzailea
                        </th>
                        <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                            Denbora
                        </th>

                        <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                            Irabazita
                        </th>
                        <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                            Ezabatu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partidak as $partida)
                        <tr class="bg-[#010440] border border-[#0BD904]">
                            <td class="px-6 py-4 text-base border border-[#0BD904]">
                                {{ $partida->erabiltzailea->erabiltzailea }}
                            </td>
                            <td class="px-6 py-4 text-base border border-[#0BD904]">
                                {{ $partida->denbora }}
                            </td>
                            <td class="px-6 py-4 text-base border border-[#0BD904]">
                                @if ($partida->irabazita == 1)
                                    Bai
                                @else
                                    Ez
                                @endif
                            </td>
                            <td class="px-6 py-4 border border-[#0BD904] ">
                                <a href="#"><img class="w-10 h-10" src="{{ asset('images/borrar.png') }}"
                                        alt="Jese image"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-xl text-center bg-[#010440] border border-[#0BD904] text-[#0BD904] p-5">Ez daude partidarik bukatuta!</p>
        @endif
    </div>

@endsection
