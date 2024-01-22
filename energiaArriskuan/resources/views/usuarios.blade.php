@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')
    <div
        class="flex flex-col items-center justify-center gap-10 py-16 sm:py-72 sm:flex-row sm:gap-3 md:gap-6 lg:gap-10 xl:gap-16 mx-20">

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
                        Editatu
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $usuario)
                    <tr class="bg-[#010440] border border-[#0BD904]">
                        <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap text-[#0BD904]">
                            <img class="w-10 h-10 rounded-full" src="{{ url(asset($usuario->foto)) }}" alt="Argazkia">
                            <div class="ps-3">
                                <div class="text-base">{{ $usuario->name }}</div>
                                <div class="font-normal text-[#0BD904]">{{ $usuario->abizena }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 text-base border border-[#0BD904]">
                            {{ $usuario->email }}
                        </td>
                        <td class="px-6 py-4 border border-[#0BD904] ">
                            <a href="#"><img class="w-10 h-10" src="{{ asset('images/ver.png') }}"
                                    alt="Jese image"></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
