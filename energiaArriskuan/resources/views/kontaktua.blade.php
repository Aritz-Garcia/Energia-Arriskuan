@extends('layouts.plantillaKontaktua')

@section('title', 'Kontaktua')

@section('content')

    <div class="flex flex-col lg:flex-row w-full">

        <div class="w-full lg:w-1/2 lg:p-24 pb-8 pl-16 pr-16 pt-24">

            <h2 class="text-2xl mb-2 text-[#0BD904]">
                Ohiko galderak
            </h2>

            <button class="accordion bg-[#010440] text-[#0BD904]">
                Zein da escape room-aren iraupena?
            </button>
            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat.</p>
            </div>

            <button class="accordion bg-[#010440] text-[#0BD904]">Zenbat pertsonak parte har dezakete aldi berean escape
                room-aren?</button>
            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat.</p>
            </div>

            <button class="accordion bg-[#010440] text-[#0BD904]">Berariazko trebetasunak behar ditut escape room-are
                gozatzeko?</button>

            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>

            </div>

            <button class="accordion bg-[#010440] text-[#0BD904]">
                Zer gertatzen da probak esleitutako denboraren barruan ebaztea lortzen ez badugu?</button>

            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat.</p>

            </div>

            <button class="accordion bg-[#010440] text-[#0BD904]">Pistarik edo laguntzarik jaso dezaket jokoan
                zehar?</button>

            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat.</p>

            </div>

            <button class="accordion bg-[#010440] text-[#0BD904]">Zer gertatzen da igarkizun bat konpondu ezin badut escape
                room-an?</button>

            <div class="panel">
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat.</p>

            </div>

        </div>

        <div class="w-full lg:w-1/2 lg:p-24  pl-16 pr-16 pb-16 sm:pt-8">

            <form action="" method="POST">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#0BD904]">
                        Izena
                    </label>
                    <input type="text" name="name" id="name""
                        class="w-full rounded-md border border-[#0BD904] bg-[#010440] py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#0BD904]">
                        Abizena
                    </label>
                    <input type="email" name="email" id="email""
                        class="w-full rounded-md border border-[#0BD904] bg-[#010440] py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#0BD904]">
                        Gaia
                    </label>
                    <input type="text" name="subject" id="subject""
                        class="w-full rounded-md border border-[#0BD904] bg-[#010440] py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="message" class="mb-3 block text-base font-medium text-[#0BD904]">
                        Mezua
                    </label>
                    <textarea rows="4" name="message" id="message""
                        class="w-full resize-none rounded-md border border-[#0BD904] bg-[#010440] py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md"></textarea>
                </div>
                <div>
                    <button
                        class="hover:bg-white rounded-full bg-[#0BD904] py-3 px-8 text-base font-semibold text-[#010440] outline-none">
                        Bidali
                    </button>
                </div>
            </form>

        </div>

    </div>




@endsection
