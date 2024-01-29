@extends('layouts.plantillaKontaktua')

@section('title', 'Kontaktua')

@section('content')

    <div class="flex flex-col lg:flex-row w-full">

        <div class="w-full lg:w-1/2 lg:p-24 pb-8 pl-16 pr-16 pt-24">

            <h2 class="text-2xl mb-2 testu-kolore-nagusia">
                Ohiko galderak
            </h2>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">
                Zein da escape room-aren iraupena?
            </button>
            <div class="panel">
                <p class="text-white">20 minutu daude escape room-a bukatzeko.</p>
            </div>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">Zenbat pertsonak parte har dezakete aldi berean escape
                room-aren?</button>
            <div class="panel">
                <p class="text-white">Gailu bakoitzeko pertsona bakarrak jolastu dezake aldi berean.</p>
            </div>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">Berariazko trebetasunak behar ditut escape room-are
                gozatzeko?</button>

            <div class="panel">
                <p class="text-white">Energi berriztagarriei buruz jakin behar da escape room-a bukatzeko.</p>

            </div>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">
                Zer gertatzen da probak esleitutako denboraren barruan ebaztea lortzen ez badugu?</button>

            <div class="panel">
                <p class="text-white">Denbora bukatzean eta proba batean bat bukatu gabe badago partida galdutzat emango da eta profilera eramango zaitu nahi izatekotan beste partida berri bat egiteko.</p>

            </div>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">Pistarik edo laguntzarik jaso dezaket jokoan
                zehar?</button>

            <div class="panel">
                <p class="text-white">Bai, pantailaren goikaldean eskuinaldean bonbilla bat dago nahi izatekotan pista edo laguntza bat emateko, baina bonbillan klikatzean denbora behera joango da.</p>

            </div>

            <button class="accordion atzekaldeko-kolore-oinarria testu-kolore-nagusia">Zer gertatzen da igarkizun bat konpondu ezin badut escape
                room-an?</button>

            <div class="panel">
                <p class="text-white">Proba bakoitzaren azkenengo pista erantzuna izango da, baina pista hori ikusterakoan denbora gehiago kenduko da eta partida galtzeko aukera handiagoak egongo dira.</p>

            </div>

        </div>

        <div class="w-full lg:w-1/2 lg:p-24  pl-16 pr-16 pb-16 sm:pt-8">

            <form action="" method="POST">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium testu-kolore-nagusia">
                        Izena
                    </label>
                    <input type="text" name="name" id="name""
                        class="w-full rounded-md border border-color-nagusia atzekaldeko-kolore-oinarria py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium testu-kolore-nagusia">
                        Abizena
                    </label>
                    <input type="email" name="email" id="email""
                        class="w-full rounded-md border border-color-nagusia atzekaldeko-kolore-oinarria py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium testu-kolore-nagusia">
                        Gaia
                    </label>
                    <input type="text" name="subject" id="subject""
                        class="w-full rounded-md border border-color-nagusia atzekaldeko-kolore-oinarria py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="message" class="mb-3 block text-base font-medium testu-kolore-nagusia">
                        Mezua
                    </label>
                    <textarea rows="4" name="message" id="message""
                        class="w-full resize-none rounded-md border border-color-nagusia atzekaldeko-kolore-oinarria py-3 px-6 text-base font-medium text-white outline-none focus:border-white focus:shadow-md"></textarea>
                </div>
                <div>
                    <button
                        class="hover:bg-white rounded-full atzekaldeko-kolore-nagusia py-3 px-8 text-base font-semibold testu-kolore-oinarria outline-none">
                        Bidali
                    </button>
                </div>
            </form>

        </div>

    </div>




@endsection
