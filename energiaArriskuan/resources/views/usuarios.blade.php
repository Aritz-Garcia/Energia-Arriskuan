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

    <div class="max-w-screen-md mx-auto py-4 sm:py-80">


        @if (count($users) > 0)
            <table
                class="table-auto w-full border-collapse text-sm text-left rtl:text-right testu-kolore-nagusia border border-color-nagusia mx-auto">
                <!-- Encabezado de la tabla -->
                <thead class="text-md text-[#ffffff] uppercase text-base atzekaldeko-kolore-oinarria">
                    <tr>
                        <th class="pl-5 py-3 border border-color-nagusia">Izen-Abizena</th>
                        <th class="pl-5 py-3 border border-color-nagusia">Email</th>
                        <th class="pl-5 py-3 border border-color-nagusia">Perfilara joan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de la tabla -->
                    @foreach ($users as $usuario)
                        <tr class="atzekaldeko-kolore-oinarria border border-color-nagusia">
                            <!-- Contenido de cada celda -->
                            <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap testu-kolore-nagusia">
                                <img class="w-10 h-10 rounded-full" src="{{ url(asset($usuario->foto)) }}" alt="Argazkia">
                                <div class="ps-3">
                                    <div class="text-base">{{ $usuario->name }}</div>
                                    <div class="font-normal testu-kolore-nagusia">{{ $usuario->abizena }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-base border border-color-nagusia">{{ $usuario->email }}</td>
                            <td class="px-6 py-4 border border-color-nagusia">
                                <a href="{{ route('profile.index',$usuario->id)}}"><img class="w-10 h-10" src="{{ asset('images/ver.png') }}"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $users->links() }}
            </div>
        @else
            <p class="text-xl text-center atzekaldeko-kolore-oinarria border border-color-nagusia testu-kolore-nagusia p-5">Ez daude erabiltzarile
                arruntarik!</p>
        @endif
    </div>
@endsection
