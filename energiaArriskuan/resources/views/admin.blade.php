@extends('layouts.plantillaKontaktua')

@section('title', 'Admin Orrialdea')

@section('content')


    <div
        class="flex flex-col items-center justify-center gap-10 py-16 sm:py-72 sm:flex-row sm:gap-3 md:gap-6 lg:gap-10 xl:gap-16 mx-20">

        <a href="{{ route('erabiltzaileakAdmin', Auth::user()->id) }}"
            class="flex-2/3 card testu-kolore-nagusia hover:text-[#ffffff] atzekaldeko-kolore-oinarria py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/admin.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">ADMINISTRATZAILEAK</p>
            </div>
        </a>

        <a href="{{ route('erabiltzaileakNormalak', Auth::user()->id) }}"
            class="flex-2/3 card testu-kolore-nagusia hover:text-[#ffffff] atzekaldeko-kolore-oinarria py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/user.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">ERABILTZAILEAK</p>
            </div>
        </a>

        <a href="{{ route('partidak', Auth::user()->id) }}"
            class="flex-2/3 card testu-kolore-nagusia hover:text-[#ffffff] atzekaldeko-kolore-oinarria py-5 rounded-3xl border-2 border-[#0BD904] hover:border-[#ffffff] w-60 min-w-48">
            <div>
                <img src="{{ asset('images/partidak.png') }}" alt="admin" class="mx-auto pb-6">
                <p class="text-center text-lg">PARTIDAK</p>
            </div>
        </a>

    </div>

@endsection
