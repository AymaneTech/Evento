<x-layouts.layout>

    <section>
        <div class="heading flex flex-col items-center justify-center mt-16 gap-4">
            <h1 class="text-5xl font-bold">{{ $booking->participant->name }}'s {{ $booking->event->title }} </h1>
            <h2 class="text-5xl font-bold">{{ $booking->event->date->format('Y') }} Ticket</h2>
            <p>Go Back To The Home Page To Get Your Free Ticket</p>
            <a href="/"
               class="inline-flex items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Go
                back Home</a>
        </div>
        @include("participant.ticketPdf")
        <div class="text-center">
            <a href=" {{ route("tickets.download", $booking->id) }}"
               class=" px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Download
                it</a>
        </div>
    </section>
</x-layouts.layout>
