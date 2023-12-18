<nav class="bg-[#010440] border-gray-200">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../public/images/Logo.png" class="h-20" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Energia Arriskuan</span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <button onclick="window.location='{{ url('/dashboard') }}'"
                                class="font-semibold text-white bg-[#0BD904] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                            Dashboard
                        </button>
                    @else
                        <button onclick="window.location='{{ route('login') }}'"
                                class="font-semibold text-white bg-[#0BD904] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                            Log in
                        </button>

                        @if (Route::has('register'))
                            <button onclick="window.location='{{ route('register') }}'"
                                    class="font-semibold text-white bg-[#0BD904] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">
                                Register
                            </button>
                        @endif
                    @endauth
                </div>


                @endif
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-[#0BD904] border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#0BD904] md:p-0 dark:text-white md:dark:hover:text-[#0BD904] dark:hover:bg-gray-700 dark:hover:text-[#0BD904] md:dark:hover:bg-transparent dark:border-gray-700">Hasiera</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-[#0BD904] border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#0BD904] md:p-0 dark:text-white md:dark:hover:text-[#0BD904] dark:hover:bg-gray-700 dark:hover:text-[#0BD904] md:dark:hover:bg-transparent dark:border-gray-700">Klasifikazioa</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#0BD904] md:p-0 dark:text-white md:dark:hover:text-[#0BD904] dark:hover:bg-gray-700 dark:hover:text-[#0BD904] md:dark:hover:bg-transparent dark:border-gray-700">Kontaktua</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
