<x-layouts.dashboard-layout>
    <x-sections.statistics :statistics="$statistics"/>

    <x-cards.table>
        <thead class="align-bottom">
        <tr>
            <x-elements.th>Event Title</x-elements.th>
            <x-elements.th>Participant Name</x-elements.th>
            <x-elements.th>Event Booking Type</x-elements.th>
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
                            <img src="../assets/img/team-2.jpg"
                                 class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                 alt="user1"/>
                        </div>
                        <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                {{ $booking->event->title }}</h6>
                        </div>
                    </div>
                </td>
                <x-elements.td>
                    {{ $booking->participant->name }}
                </x-elements.td>
                <x-elements.td>
                        <span
                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $booking->event->bookingType }}</span>
                </x-elements.td>
                <x-elements.td> {{ $booking->created_at->diffForHumans() }}</x-elements.td>
                <td
                    @if($booking->event->bookingType === "manual")
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <form action="{{ route("organiser.bookings.update", $booking->id) }}" method="post">
                        @method("put")
                        @csrf
                        <button>{{ $booking->isConfirmed ? "Decline" : "Accept" }}</button>
                    </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>

    </x-cards.table>
        <div>{{ $bookings->links() }}</div>

</x-layouts.dashboard-layout>
