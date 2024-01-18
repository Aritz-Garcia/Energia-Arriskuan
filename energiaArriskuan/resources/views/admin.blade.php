@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')


    <div
        class="flex flex-col items-center justify-center gap-10 py-16 sm:py-56 sm:flex-row sm:gap-3 md:gap-6 lg:gap-10 xl:gap-16 mx-20">

        <a href="{{ route('erabiltzaileakAdmin', Auth::user()->id) }}"
            class="flex-2/3 card text-[#0BD904] hover:text-[#ffffff] bg-[#010440] py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/admin.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">ADMINISTRATZAILEAK</p>
            </div>
        </a>

        <a href="{{ route('erabiltzaileakNormalak', Auth::user()->id) }}"
            class="flex-2/3 card text-[#0BD904] hover:text-[#ffffff] bg-[#010440] py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/user.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">ERABILTZAILEAK</p>
            </div>
        </a>

        <a href="{{ route('partidak', Auth::user()->id) }}"
            class="flex-2/3 card text-[#0BD904] hover:text-[#ffffff] bg-[#010440] py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/partidak.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">PARTIDAK</p>
            </div>
        </a>

    </div>









    {{-- <table class="max-w-screen-md mx-auto text-sm text-left  rtl:text-right text-[#0BD904] border border-[#0BD904]">
        <thead class="text-md text-[#ffffff] uppercase text-base bg-[#010440]">
            <tr class="">
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    izen-abizena
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Rola
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Editatu
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $usuario)
            @if ($usuario->rol == 1)
                <tr class="bg-[#010440] border border-[#0BD904]">
                    <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap text-[#0BD904]">
                        <img class="w-10 h-10 rounded-full" src="{{ $usuario->foto }}" alt="Argazkia">
                        <div class="ps-3">
                            <div class="text-base">{{ $usuario->name }}</div>
                            <div class="font-normal text-[#0BD904]">{{ $usuario->abizena }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4 text-base border border-[#0BD904]">
                        {{ $usuario->email }}
                    </td>
                    <td class="px-6 py-4 text-base border border-[#0BD904]">
                        {{ $usuario->rol }}
                    </td>
                    <td class="px-6 py-4 border border-[#0BD904] ">
                        <a href="#"><img class="w-10 h-10" src="{{ asset('images/ver.png') }}" alt="Jese image"></a>
                    </td>
                </tr>
            @endif
        @endforeach

        </tbody>
    </table>

    <table class="max-w-screen-md mx-auto text-sm text-left  rtl:text-right text-[#0BD904] border border-[#0BD904]">
        <thead class="text-md text-[#ffffff] uppercase text-base bg-[#010440]">
            <tr class="">
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    izen-abizena
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Rola
                </th>
                <th scope="col" class="px-6 py-3 border border-[#0BD904]">
                    Editatu
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $usuario)
            @if ($usuario->rol == 0)
                <tr class="bg-[#010440] border border-[#0BD904]">
                    <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap text-[#0BD904]">
                        <img class="w-10 h-10 rounded-full" src="{{ $usuario->foto }}" alt="Argazkia">
                        <div class="ps-3">
                            <div class="text-base">{{ $usuario->name }}</div>
                            <div class="font-normal text-[#0BD904]">{{ $usuario->abizena }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4 text-base border border-[#0BD904]">
                        {{ $usuario->email }}
                    </td>
                    <td class="px-6 py-4 text-base border border-[#0BD904]">
                        {{ $usuario->rol }}
                    </td>
                    <td class="px-6 py-4 border border-[#0BD904] ">
                        <a href="#"><img class="w-10 h-10" src="{{ asset('images/ver.png') }}" alt="Jese image"></a>
                    </td>
                </tr>
            @endif
        @endforeach

        </tbody>
    </table> --}}
    </div>

@endsection
