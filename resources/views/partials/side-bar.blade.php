{{--<aside--}}
{{--    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0"--}}
{{--    aria-expanded="false">--}}
{{--    <div class="h-19">--}}
{{--        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"--}}
{{--           sidenav-close></i>--}}
{{--        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"--}}
{{--           href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">--}}
{{--            <img src="../assets/img/logo-ct-dark.png"--}}
{{--                 class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"--}}
{{--                 alt="main_logo"/>--}}
{{--            <img src="../assets/img/logo-ct.png"--}}
{{--                 class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"--}}
{{--                 alt="main_logo"/>--}}
{{--            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Evento Dashboard</span>--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>--}}

{{--    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">--}}
{{--        <ul class="flex flex-col pl-0 mb-0">--}}
{{--            @if(request()->is("dashboard/*") || request()->is("dashboard"))--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"--}}
{{--                       href="/dashboard">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors "--}}
{{--                       href="{{ route("admin.categories.index") }}">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Category</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors "--}}
{{--                       href="{{ route("admin.events.index") }}">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Events</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @elseif(request()->is("organiser/*"))--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors "--}}
{{--                       href="{{ route("organiser.events.index") }}">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Events</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors "--}}
{{--                       href="{{ route("organiser.bookings.index") }}">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Bookings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--            @if(auth("organiser")->check())--}}
{{--                <li class="mt-0.5 w-full">--}}
{{--                    <a href="{{ route("profile.edit", ['profile' => auth("organiser")->id()]) }}"--}}
{{--                       class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80">--}}
{{--                        <div--}}
{{--                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>--}}
{{--                        </div>--}}
{{--                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--            <li class="mt-0.5 w-full">--}}
{{--                <form action="{{ route("logout") }}" method="post">--}}
{{--                    @csrf--}}
{{--                    <div--}}
{{--                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">--}}
{{--                        <button--}}
{{--                            class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80">--}}
{{--                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04"></i>--}}
{{--                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Logout</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--</aside>--}}

<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
           sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
           href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Evento Dashboard</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            @auth('admin')
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="/dashboard">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="{{ route("admin.events.index") }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Events</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="{{ route("admin.categories.index") }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Categories</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="{{route("admin.bookings.index")}}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Bookings</span>
                    </a>
                </li>
            @elseauth("organiser")
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="{{ route("organiser.events.index") }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Events</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                       href="{{route("organiser.bookings.index")}}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Bookings</span>
                    </a>
                </li>
            @endauth
            @if(! auth("participant")->check())
                <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
                @else
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                           href="/">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Back Home</span>
                        </a>
                    </li>
                @endif
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                   href="{{ route("profile.edit", ["profile" => session()->get("userId") ])}}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <form action="{{ route("logout") }}" method="post" class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80">
                    @csrf
                    <button>
                        <i class="fa fa-user sm:mr-1"></i>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
