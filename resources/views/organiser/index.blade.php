<x-layouts.dashboard-layout>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                <div
                    class="flex justify-between mb-8 p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="">Events table</h6>
                    <x-modals.button name="event-create">create new event</x-modals.button>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center justify-center w-full mb-0 align-top border-collapse text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    ID
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Title
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-start uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Number of seats
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-start uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Price
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-start uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Availability
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-start uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Address
                                </th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-start uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class="border-t">
                            @foreach ($events as $event)
                                <tr class="{{$event->isVerified ? "bg-red-200" : ""}}">
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset("storage/images/". $event->images[0]->path) }}"
                                                     class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-lg w-16 h-16"
                                                     alt="spotify"/>
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal ">{{ $event->id }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <x-td size="text-sm">{{ $event->title }}</x-td>
                                    <x-td>{{ $event->date->diffForHumans() }}</x-td>
                                    <x-td>{{ $event->numberOfSeats }}</x-td>
                                    <x-td>${{ $event->price }}</x-td>
                                    <x-td>{{ $event->location }}</x-td>
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="bg-{{$event->isFull ? 'red' : 'green'}}-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{$event->isFull ? "Full" : "Available"}}</span>
                                    </td>
                                    <td
                                        class="p-2 flex gap-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        @if(request()->is("organiser/*"))
                                            <form action="{{ route('events.destroy', $event->slug) }}"
                                                  method="post">
                                                @method("delete")
                                                @csrf
                                                <button
                                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text">
                                                    <i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete
                                                </button>
                                            </form>
                                            <button data-modal-target="event-update" data-modal-toggle="event-update"
                                                    class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700"
                                                    type="submit"
                                                    data-slug="{{ $event->slug }}"
                                                    data-title="{{ $event->title }}"
                                                    data-date="{{ $event->date }}"
                                                    data-price="{{ $event->price }}"
                                                    data-numberOfSeats="{{ $event->numberOfSeats }}"
                                                    data-bookingType="{{ $event->bookingType }}"
                                                    data-categoryId="{{ $event->category->id }}"
                                                    data-location="{{ $event->location }}"
                                                    data-description="{{ $event->description }}">
                                                <i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit
                                            </button>
                                        @else
                                            <form action="{{ route("admin.events.update", $event->slug) }}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="isVerified"
                                                       value="{{ ! $event->isVerified }}">
                                                <button class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md {{ $event->isVerified ? 'bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25' : 'bg-gradient-to-tl from-green-400 to-green-600 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem' }}">
                                                    {{ $event->isVerified ? 'remove' : 'validate' }}
                                                </button>

                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div>{{ $events->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modals.event-create :categories="$categories"/>
    <x-modals.event-update :categories="$categories"/>
    <script src="/assets/js/event-update.js"></script>

</x-layouts.dashboard-layout>
