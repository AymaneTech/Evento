<x-layouts.dashboard-layout :breadcrumb="['Dashboard ', 'Statistics - Users']">
    <x-sections.statistics :statistics="$statistics"/>
    <div
        class="relative mt-8 flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3 my-auto">
                <div class="h-full">
                    <h5 class="mb-1 dark:text-white">Users management</h5>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                <div class="relative right-0">
                    <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills role="tablist">
                        <li id="organiserBtn" class="z-30 flex-auto text-center">
                            <a  href="#organisers"  class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                               nav-link active role="tab" aria-selected="true">
                                <span class="ml-2">Organisers</span>
                            </a>
                        </li>
                        <li id="participantBtn" class="z-30 flex-auto text-center">
                            <a href="#participant" class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                               nav-link  role="tab" aria-selected="false">
                                <span class="ml-2">Participants</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="organisersTable">
        <x-cards.table name="Organisers table">
            <thead class="align-bottom">
            <tr>
                <x-elements.th>User</x-elements.th>
                <x-elements.th>Function</x-elements.th>
                <x-elements.th>Joined</x-elements.th>
                <x-elements.th></x-elements.th>
            </tr>
            </thead>
            <tbody>
            @foreach ($organisers as $organiser)
                <tr>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div>
                                <img src="{{ asset("storage/images/" .$organiser->image->path )}}"
                                     class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                     alt="user1"/>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                    {{ $organiser->name }}</h6>
                                <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                    {{ $organiser->email }}</p>
                            </div>
                        </div>
                    </td>
                    <x-elements.td>
                        <span
                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                    </x-elements.td>
                    <x-elements.td> {{ $organiser->created_at->diffForHumans() }}</x-elements.td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        @if($organiser->deleted_at === null)
                            <form action="{{ route('admin.usersAccess.suspend', $organiser->id) }}"
                                  method="post">
                                @method("delete")
                                @csrf
                                <button
                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-white align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-red-600 hover:-translate-y-px active:opacity-85">
                                    <i class="mr-2 far fa-trash-alt"></i>Suspend
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.usersAccess.activate', $organiser->id) }}"
                                  method="post">
                                @method("patch")
                                @csrf
                                <button
                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-white align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-green-600 hover:-translate-y-px active:opacity-85">
                                    <i class="mr-2 far fa-trash-alt"></i>Activate
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </x-cards.table>
        <div>
            {{ $organisers->links() }}
        </div>
    </section>
    <section id="participantsTable" class="hidden">
        <x-cards.table name="Participants table">
            <thead class="align-bottom">
            <tr>
                <x-elements.th>User</x-elements.th>
                <x-elements.th>Function</x-elements.th>
                <x-elements.th>Status</x-elements.th>
                <x-elements.th>Joined</x-elements.th>
                <x-elements.th></x-elements.th>
            </tr>
            </thead>
            <tbody>
            @foreach ($participants as $participant)
                <tr>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div>
                                <img src="{{ asset("storage/images/" .$participant->image->path )}}"
                                     class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                     alt="user1"/>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                    {{ $participant->name }}</h6>
                                <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                    {{ $participant->email }}</p>
                            </div>
                        </div>
                    </td>
                    <x-elements.td>
                        <span
                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                    </x-elements.td>
                    <x-elements.td> {{ $participant->created_at->diffForHumans() }}</x-elements.td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        @if($participant->deleted_at === null)
                            <form action="{{ route('admin.usersAccess.suspend', $participant->id) }}"
                                  method="post">
                                @method("delete")
                                @csrf
                                <button
                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-white align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-red-600 hover:-translate-y-px active:opacity-85">
                                    <i class="mr-2 far fa-trash-alt"></i>Suspend
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.usersAccess.activate', $participant->id) }}"
                                  method="post">
                                @method("patch")
                                @csrf
                                <button
                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-white align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-green-600 hover:-translate-y-px active:opacity-85">
                                    <i class="mr-2 far fa-trash-alt"></i>Activate
                                </button>
                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach

            </tbody>
        </x-cards.table>
        <div>
            {{ $participants->links() }}
        </div>
    </section>

    <script src="/assets/js/usersSlide.js"></script>
</x-layouts.dashboard-layout>
