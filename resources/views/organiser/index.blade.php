<x-layouts.dashboard-layout>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                <div
                    class="flex justify-between mb-8 p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="">Events table</h6>
                    @if(request()->is("organiser/*"))
                        <x-modals.button name="event-create">create new event</x-modals.button>
                    @endif
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center justify-center w-full mb-0 align-top border-collapse text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <x-elements.th>
                                    Id
                                </x-elements.th>
                                <x-elements.th>Title</x-elements.th>
                                <x-elements.th>Date</x-elements.th>
                                <x-elements.th>Number of seats</x-elements.th>
                                <x-elements.th>Price</x-elements.th>
                                <x-elements.th>Availability</x-elements.th>
                                <x-elements.th>Address</x-elements.th>
                               <x-elements.th>Actions</x-elements.th>
                            </tr>
                            </thead>
                            <tbody class="border-t">
                            @forelse ($events as $event)
                                <tr class="{{! $event->isVerified ? "bg-red-200" : ""}}">
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset("storage/images/" /*.$event->images[0]->path*/) }}"
                                                     class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-lg w-16 h-16"
                                                     alt="spotify"/>
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal ">{{ $event->id }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <x-elements.td size="text-sm">{{ $event->title }}</x-elements.td>
                                    <x-elements.td>{{ $event->date->diffForHumans() }}</x-elements.td>
                                    <x-elements.td>{{ $event->numberOfSeats }}</x-elements.td>
                                    <x-elements.td>${{ $event->price }}</x-elements.td>
                                    <x-elements.td>{{ $event->location }}</x-elements.td>
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
                                                <button
                                                    class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md {{ $event->isVerified ? 'bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25' : 'bg-gradient-to-tl from-green-400 to-green-600 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem' }}">
                                                    {{ $event->isVerified ? 'remove' : 'validate' }}
                                                </button>

                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <div class="text-center min-h-[70vh]">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor"
                                         aria-hidden="true">
                                        <path vector-effect="non-scaling-stroke" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"
                                              d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No Rooms</h3>
                                    <p class="mt-1 text-sm text-gray-500">Get started by creating a new room</p>
                                    <div class="mt-6">

                                    </div>
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                        <div>{{ $events->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(request()->is("organiser/*"))
        <x-modals.event-create :categories="$categories"/>
        <x-modals.event-update :categories="$categories"/>
    @endif
    <script src="/assets/js/event-update.js"></script>

</x-layouts.dashboard-layout>
