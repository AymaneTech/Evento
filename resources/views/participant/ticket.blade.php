<x-layouts.layout>

    <section>
        <div class="heading flex flex-col items-center justify-center mt-16">
            <h1 class="text-5xl font-bold">{{ $booking->participant->name }}'s {{ $booking->event->title }} </h1>
            <h2 class="text-5xl font-bold">{{ $booking->event->date->format('Y') }} Ticket</h2>
        </div>
        <div class="ticket container mx-auto w-[900px] bg-yellow-600 mt-32 rounded-xl p-8">
            <div class="header flex justify-around">
                <div class="logo">
                    <h2>Evento</h2>
                </div>
                <div class="participant flex gap-4 items-center">
                    <div class="info flex flex-col">
                        <strong>{{ $booking->participant->name }}</strong>
                        <span>{{ $booking->participant->email }}</span>
                    </div>
                    <img class="w-20 h-20 rounded-full" src="{{ asset("storage/images/". $booking->participant->avatar->path) }}" alt="">
                </div>
            </div>
            <h1 class="font-bold text-4xl text-center my-4">{{ $booking->event->title }}</h1>
            <div class="details flex justify-around">
                <div class="place">
                    <strong>place</strong>
                    <p>{{ $booking->event->location }}</p>
                </div>
                <div class="date">
                    <strong>date</strong>
                    <p>{{ $booking->event->date->format("d M Y") }}</p>
                </div>
                <div class="time">
                    <strong>Time</strong>
                    <p>starting from: {{ $booking->event->date->format("H:i") }}</p>
                </div>
                <div class="organiser">
                    <strong>Organised by</strong>
                    <p>{{ $booking->event->organiser->name }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.layout>
