<x-dashboard-layout>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                <div class="flex justify-between mb-8 p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="">Categories table</h6>
                    <x-modals.button name="category-create">create new category</x-modals.button>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center justify-center w-full mb-0 align-top border-collapse text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Description</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-t">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="/assets/img/small-logos/logo-spotify.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                        alt="spotify" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal ">{{ $category->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">{{ $category->name }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight">{{ $category->description }}</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span
                                                    class="mr-2 text-xs font-semibold leading-tight">{{ count($category->events) }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <x-modals.category-create/>

</x-dashboard-layout>
