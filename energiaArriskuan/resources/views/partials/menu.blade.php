<nav class="atzekaldeko-kolore-oinarria border-gray-200">
    <div class="flex flex-wrap items-center justify-center sm:justify-between max-w-screen-xl mx-auto p-4">
        <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url(asset('images/Logo.png')) }}" class="h-20" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap testu-kolore-nagusia">ENERGIA ARRISKUAN</span>
        </a>
        <div class="flex items-center lg:order-2 space-x-1 lg:space-x-2 rtl:space-x-reverse">
            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    <div class="lg:flex items-center space-x-4 hidden">
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <div class="flex items-center justify-center testu-kolore-nagusia hover:text-white">
                                        <a class="font-semibold py-2 px-1 focus:outline-none ">
                                            {{ Auth::user()->erabiltzailea }}
                                        </a>
                                        <svg class="fill-current h-5 w-4">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="py-2 atzekaldeko-kolore-oinarria testu-kolore-nagusia border rounded">
                                        <x-dropdown-link :href="route('profile.index', Auth::user()->id)"
                                            class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        @if (Auth::user()->rol == 1)
                                            <x-dropdown-link :href="route('admin', Auth::user()->id)"
                                                class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                                {{ __('Admin') }}
                                            </x-dropdown-link>
                                        @endif

                                        <!-- Autenticación -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                                {{ __('Saioa Itxi') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <button onclick="window.location='{{ route('login') }}'"
                                class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                                Saioa hasi
                            </button>
                            @if (Route::has('register'))
                                <button onclick="window.location='{{ route('register') }}'"
                                    class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                                    Erregistratu
                                </button>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <button id="boton-menu-movil" data-collapse-toggle="mega-menu" type="button"
                class="flex justify-center items-center p-2 w-full testu-kolore-nagusia rounded-lg lg:hidden"
                aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Menua zabaldu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!-- Elementos del mega menú -->
        <div id="mega-menu" class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:mt-0 lg:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="{{ route('index') }}"
                        class="block py-2 px-3 border-b lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0BD904] lg:p-0 text-white">Hasiera</a>
                </li>
                <li>
                    <a href="{{ route('klasifikazioa') }}"
                        class="block py-2 px-3 border-b lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0BD904] lg:p-0 text-white">Klasifikazioa</a>
                </li>
                <li>
                    <a href="{{ route('kontaktua') }}"
                        class="block py-2 px-3  border-b lg:hover:bg-transparent lg:border-0 lg:hover:text-[#0BD904] lg:p-0 text-white">Kontaktua</a>
                </li>
                <li class="lg:hidden flex flex-row pt-4 pb-2 gap-4">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <div class="flex items-center px-3 testu-kolore-nagusia hover:text-white">
                                    <a class="font-semibold  py-2 focus:outline-none ">
                                        {{ Auth::user()->erabiltzailea }}
                                    </a>
                                    <svg class="fill-current h-5 w-4">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </x-slot>
                            <x-slot name="content">
                                <div class="py-2 atzekaldeko-kolore-oinarria testu-kolore-nagusia  border rounded">
                                    <x-dropdown-link :href="route('profile.index', Auth::user()->id)"
                                        class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if (Auth::user()->rol == 1)
                                        <x-dropdown-link :href="route('admin', Auth::user()->id)"
                                            class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                            {{ __('Admin') }}
                                        </x-dropdown-link>
                                    @endif



                                    <!-- Autenticación -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="block px-4 py-2 text-white hover:text-[#0BD904]">
                                            {{ __('Saioa Itxi') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex flex-col gap-4">
                            <button onclick="window.location='{{ route('login') }}'"
                                class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                                Saioa hasi
                            </button>
                            @if (Route::has('register'))
                                <button onclick="window.location='{{ route('register') }}'"
                                    class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                                    Erregistratu
                                </button>
                            @endif
                        </div>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
