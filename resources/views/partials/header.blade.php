<header class="bg-[#FCF8F1] bg-opacity-30">
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <div class="flex-shrink-0">
                <a href="/" title="" class="flex font-bold text-xl">
                    Evento
                </a>
            </div>

            <button type="button"
                    class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                </svg>

                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10">

                <a href="#home" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80">
                    Home</a>
                <a href="#events" title=""
                   class="text-base text-black transition-all duration-200 hover:text-opacity-80"> Events</a>

                <a href="#categories" title=""
                   class="text-base text-black transition-all duration-200 hover:text-opacity-80"> Categories </a>

                <a href="#" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80">
                    Contact </a>
            </div>
            <div class="flex gap-4">
                <a href="#" title=""
                   class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-yellow-300 hover:text-black focus:text-black focus:bg-yellow-300 font-semibold text-white bg-black rounded-full"
                   role="button"> Join Now </a>
                @if(auth("participant")->check())
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class=""
                            type="button">
                        <img class="w-10 h-10 rounded-full"
                             src="{{ asset("storage/images/". auth("participant")->user()->image->path)}}"
                             alt="Rounded avatar">
                    </button>
                    <div id="dropdown"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route("profile.edit", ['profile' => auth("participant")->id()]) }}"
                                   class="block px-4 py-2 hover:bg-gray-100">My Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100">My Bookings list</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
