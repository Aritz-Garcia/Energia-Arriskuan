@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')
    <div class="max-w-screen-md mx-auto py-4 sm:py-72">
        @if (count($users) > 0)
            <table class="table-auto w-full border-collapse text-sm text-left rtl:text-right text-[#0BD904] border border-[#0BD904] mx-auto">
                <!-- Encabezado de la tabla -->
                <thead class="text-md text-[#ffffff] uppercase text-base bg-[#010440]">
                    <tr>
                        <th class="px-6 py-3 border border-[#0BD904]">Izen-Abizena</th>
                        <th class="px-6 py-3 border border-[#0BD904]">Email</th>
                        <th class="px-6 py-3 border border-[#0BD904]">Editatu</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de la tabla -->
                    @foreach ($users as $usuario)
                        <tr class="bg-[#010440] border border-[#0BD904]">
                            <!-- Contenido de cada celda -->
                            <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap text-[#0BD904]">
                                <img class="w-10 h-10 rounded-full" src="{{ url(asset($usuario->foto)) }}"
                                    alt="Argazkia">
                                <div class="ps-3">
                                    <div class="text-base">{{ $usuario->name }}</div>
                                    <div class="font-normal text-[#0BD904]">{{ $usuario->abizena }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-base border border-[#0BD904]">{{ $usuario->email }}</td>
                            <td class="px-6 py-4 border border-[#0BD904]">
                                <a href="#"><img class="w-10 h-10" src="{{ asset('images/ver.png') }}"
                                        alt="Jese image"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4 ">
                {{ $users->links() }}
            </div>
        @else
            <p class="text-xl text-center bg-[#010440] border border-[#0BD904] text-[#0BD904] p-5">Ez daude erabiltzarile arruntarik!</p>
        @endif
    </div>
@endsection
