<x-layouts.dashboard-layout>
    <x-sections.statistics :statistics="$statistics" />

    <x-cards.table>
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
            @foreach ($users as $user)
                <tr>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div>
                                <img src="{{ asset("storage/images" /* .$user->image->path */)}}"
                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                    alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                    {{ $user->name }}</h6>
                                <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                    {{ $user->email }}</p>
                            </div>
                        </div>
                    </td>
                    <x-elements.td>
                        organiser
                    </x-elements.td>
                    <x-elements.td>
                        <span
                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                    </x-elements.td>
                    <x-elements.td> {{ $user->created_at->diffForHumans() }}</x-elements.td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        

                    </td>
                </tr>
            @endforeach

        </tbody>
    </x-cards.table>

</x-layouts.dashboard-layout>
