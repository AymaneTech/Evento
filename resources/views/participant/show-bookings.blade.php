<x-layouts.dashboard-layout>
    <x-cards.table name="My Bookings">
        <thead class="align-bottom">
        <tr>
            <x-elements.th>Event Title</x-elements.th>
            <x-elements.th>Event date</x-elements.th>
            <x-elements.th>Booked at</x-elements.th>
            <x-elements.th>Actions</x-elements.th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td
                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                        <div>
                            <img src="{{ asset("storage/images/". $booking->event->images[0]->path) }}"
                                 class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                 alt="user1"/>
                        </div>
                        <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">
                                {{ $booking->event->title }}</h6>
                        </div>
                    </div>
                </td>
                <x-elements.td>
                    {{ $booking->event->date->format("M d Y h:i") }}
                </x-elements.td>
                <x-elements.td> {{ $booking->created_at->diffForHumans() }}</x-elements.td>
                <x-elements.td>{{ $booking->isConfirmed ? "Accepted" : "Waiting" }}</x-elements.td>
                <td
                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    @if($booking->isConfirmed)
                        <form action="{{ route("tickets.getTicket", $booking->id) }}" method="post">
                            @csrf
                            <button
                                class="w-fit inline-flex self-center items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">
                                Get your ticket
                            </button>
                        </form>
                    @else
                        Not Yet !!
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>

    </x-cards.table>

</x-layouts.dashboard-layout>
