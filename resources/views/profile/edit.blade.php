{{--<x-layouts.dashboard-layout :breadcrumb="['Users ', 'Profile']">--}}
{{--    <div class="relative w-full mx-auto mt-60 ">--}}

{{--        <div--}}
{{--            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">--}}
{{--            <div class="flex flex-wrap -mx-3">--}}
{{--                <div class="flex-none w-auto max-w-full px-3">--}}
{{--                    <div--}}
{{--                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-20 w-20 rounded-xl">--}}
{{--                        <img src="{{ asset("storage/images/". $user->image->path) }}" alt="profile_image"--}}
{{--                             class="w-full shadow-2xl rounded-full"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex-none w-auto max-w-full px-3 my-auto">--}}
{{--                    <div class="h-full">--}}
{{--                        <h5 class="mb-1 dark:text-white">{{ $user->name }}</h5>--}}
{{--                        <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">{{ $userType }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">--}}
{{--                    <div class="relative right-0">--}}
{{--                        <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills--}}
{{--                            role="tablist">--}}
{{--                            <li class="z-30 flex-auto text-center">--}}
{{--                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"--}}
{{--                                   nav-link active href="javascript:;" role="tab" aria-selected="true">--}}
{{--                                    <i class="ni ni-app"></i>--}}
{{--                                    <span class="ml-2">Profile</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            @if($userType === "participant")--}}
{{--                                <li class="z-30 flex-auto text-center">--}}
{{--                                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"--}}
{{--                                       nav-link href="{{ route("participant.bookings", $user->id) }}" role="tab" aria-selected="false">--}}
{{--                                        <i class="ni ni-email-83"></i>--}}
{{--                                        <span class="ml-2">My Bookings</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @elseif($userType === "organiser")--}}
{{--                                <li class="z-30 flex-auto text-center">--}}
{{--                                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"--}}
{{--                                       href="{{ route("organiser.events.index") }}" role="tab" aria-selected="false">--}}
{{--                                        <i class="ni ni-email-83"></i>--}}
{{--                                        <span class="ml-2">My Events</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="w-full p-6 mx-auto">--}}
{{--        <div class="flex flex-wrap -mx-3">--}}
{{--            <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">--}}
{{--                <form action="{{ route("profile.update", ["profile" => $user->id]) }}" method="post"--}}
{{--                      enctype="multipart/form-data">--}}
{{--                    @method("patch")--}}
{{--                    @csrf--}}
{{--                    <div--}}
{{--                        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">--}}
{{--                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <p class="mb-0 dark:text-white/80">Edit Profile</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="flex-auto p-6">--}}
{{--                            <p class="leading-normal uppercase text-sm">User Information</p>--}}
{{--                            <div class="mx-auto">--}}
{{--                                <div class="mb-4 flex justify-between gap-12">--}}
{{--                                    <label--}}
{{--                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">--}}
{{--                                        <img class="w-40 h-40 rounded-xl"--}}
{{--                                             src="{{ asset("storage/images/". $user->image->path) }}" alt="">--}}
{{--                                    </label>--}}
{{--                                    <input type="file" name="image"--}}
{{--                                           class="px-4 focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="flex flex-wrap -mx-3">--}}
{{--                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">--}}
{{--                                    <div class="mb-4">--}}
{{--                                        <label for="username"--}}
{{--                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>--}}
{{--                                        <input type="text" name="name" value="{{$user->name}}"--}}
{{--                                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">--}}
{{--                                    <div class="mb-4">--}}
{{--                                        <label for="email"--}}
{{--                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email--}}
{{--                                            address</label>--}}
{{--                                        <input type="email" name="email" value="{{$user->email}}"--}}
{{--                                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button type="submit"--}}
{{--                                    class="inline-block w-full text-end px-8 py-2 my-4 ml-auto font-bold leading-normal text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">--}}
{{--                                Save--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">--}}
{{--                <div--}}
{{--                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">--}}
{{--                    <div class="flex-auto p-6 pt-0">--}}
{{--                        <div class="flex flex-wrap -mx-3">--}}
{{--                            <div class="w-full max-w-full px-3 flex-1-0">--}}
{{--                                <div class="flex justify-center">--}}
{{--                                    <div class="grid text-center">--}}
{{--                                        @if($userType === "participant")--}}
{{--                                            <span class="font-bold dark:text-white text-lg">{{ $user->bookings_count }}</span>--}}
{{--                                            <span class="leading-normal dark:text-white text-sm opacity-80">Total of bookings</span>--}}
{{--                                        @elseif($userType === "organiser")--}}
{{--                                            <span class="font-bold dark:text-white text-lg">{{ $user->events_count }}</span>--}}
{{--                                            <span class="leading-normal dark:text-white text-sm opacity-80">Total of events</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-6 text-center">--}}
{{--                            <div--}}
{{--                                class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">--}}
{{--                                Joined us--}}
{{--                                <strong>{{ $user->created_at->diffForHumans() }}</strong>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">--}}
{{--                                Last update at--}}
{{--                                <strong>{{ $user->updated_at->diffForHumans() }}</strong>--}}
{{--                            </div>--}}
{{--                            <x-modals.button name="user-delete">Delelte this account</x-modals.button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <x-modals.user-delete :user="$user" :userType="$userType"/>--}}
{{--</x-layouts.dashboard-layout>--}}

<x-layouts.dashboard-layout :breadcrumb="['Users ', 'Profile']">
    <div class="w-full mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-4 bg-white dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl">
                <div class="flex items-center space-x-4">
                    <div class="w-20 h-20">
                        <img src="{{ asset("storage/images/". $user->image->path) }}" alt="profile_image" class="w-full h-full rounded-full shadow-2xl" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>

                    <div>
                        <h5 class="text-xl font-semibold dark:text-white">{{ $user->name }}</h5>
                        <p class="text-sm font-semibold text-gray-600 dark:text-white">{{ $userType }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <ul class="flex flex-wrap justify-center gap-4">
                        <li>
                            <a class="flex items-center justify-center px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-slate-700" href="#" role="tab" aria-selected="true">
                                <i class="ni ni-app"></i>
                                <span class="ml-2">Profile</span>
                            </a>
                        </li>
                        @if($userType === "participant")
                            <li>
                                <a class="flex items-center justify-center px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-slate-700" href="{{ route("participant.bookings", $user->id) }}" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ml-2">My Bookings</span>
                                </a>
                            </li>
                        @elseif($userType === "organiser")
                            <li>
                                <a class="flex items-center justify-center px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-slate-700" href="{{ route("organiser.events.index") }}" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ml-2">My Events</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-white dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl">
                <div class="text-center">
                    @if($userType === "participant")
                        <span class="block text-lg font-bold dark:text-white">{{ $user->bookings_count }}</span>
                        <span class="text-sm font-semibold text-gray-600 dark:text-white">Total Bookings</span>
                    @elseif($userType === "organiser")
                        <span class="block text-lg font-bold dark:text-white">{{ $user->events_count }}</span>
                        <span class="text-sm font-semibold text-gray-600 dark:text-white">Total Events</span>
                    @endif
                </div>
                <div class="mt-6 text-center">
                    <div class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">
                        Joined: <strong>{{ $user->created_at->diffForHumans() }}</strong>
                    </div>
                    <div class="mb-2 text-sm font-semibold text-gray-600 dark:text-white">
                        Last update: <strong>{{ $user->updated_at->diffForHumans() }}</strong>
                    </div>
                    <x-modals.button name="user-delete">Delete this account</x-modals.button>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl">
                <div class="border-b border-black/12.5 p-6">
                    <p class="text-lg font-semibold dark:text-white">Edit Profile</p>
                </div>
                <form action="{{ route("profile.update", ["profile" => $user->id]) }}" method="post" enctype="multipart/form-data">
                    @method("patch")
                    @csrf
                    <div class="p-6">
                        <p class="text-sm font-semibold">User Information</p>
                        <div class="mt-4 space-y-4">
                            <div class="flex items-center justify-between gap-12 w-25 h-25">
                                <label class="flex-shrink-0 w-40 h-40 rounded-xl overflow-hidden">
                                    <img src="{{ asset("storage/images/". $user->image->path) }}" alt="" class="w-full h-full object-cover">
                                </label>
                                <input type="file" name="image" class="flex-grow px-4 py-2 text-sm rounded-lg border border-gray-300 dark:bg-slate-850 dark:text-white dark:border-gray-600">
                            </div>

                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label for="username" class="block mb-1 text-xs font-bold text-gray-700 dark:text-white">Username</label>
                                    <input type="text" name="name" value="{{$user->name}}" class="w-full px-3 py-2 text-sm leading-5 rounded-lg border border-gray-300 dark:bg-slate-850 dark:text-white dark:border-gray-600 focus:outline-none focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="email" class="block mb-1 text-xs font-bold text-gray-700 dark:text-white">Email address</label>
                                    <input type="email" name="email" value="{{$user->email}}" class="w-full px-3 py-2 text-sm leading-5 rounded-lg border border-gray-300 dark:bg-slate-850 dark:text-white dark:border-gray-600 focus:outline-none focus:border-blue-500">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-bold text-white bg-blue-500 rounded-lg shadow-md hover:shadow-xs hover:-translate-y-px focus:outline-none focus:shadow-outline-blue">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-modals.user-delete :user="$user" :userType="$userType"/>
</x-layouts.dashboard-layout>
