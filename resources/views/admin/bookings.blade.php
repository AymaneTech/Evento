<x-layouts.dashboard-layout :breadcrumb="['Dashboard', 'Bookings']">
    <x-cards.table name="Bookings table">
        <thead class="align-bottom">
        <tr>
            <x-elements.th>ID</x-elements.th>
            <x-elements.th>User</x-elements.th>
            <x-elements.th>Event</x-elements.th>
            <x-elements.th>Event date</x-elements.th>
            <x-elements.th>Booked at</x-elements.th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <x-elements.td> {{ $booking->id }}</x-elements.td>
                <x-elements.td> {{ $booking->participant->name }}</x-elements.td>
                <x-elements.td> {{ $booking->event->title }}</x-elements.td>
                <x-elements.td> {{ $booking->event->date->diffForHumans() }}</x-elements.td>
                <x-elements.td> {{ $booking->created_at->diffForHumans() }}</x-elements.td>
            </tr>
        @endforeach
        </tbody>
    </x-cards.table>
</x-layouts.dashboard-layout>
