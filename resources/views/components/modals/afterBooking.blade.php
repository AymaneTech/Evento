<x-modals.modal name="after-booking" width="xl" title="">
    @if ($event->bookingType == 'automatic')
        <div class="text-center p-8 flex flex-col gap-12">
            <h1 class="font-bold">
                Congratulations, you take a place on <span class="text-yellow-400">{{ $event->title }}</span> event
            </h1>
            <p>Your ticket generated and saved !!! </p>
            <form id="getTicketForm" method="post">
                @csrf
                <button
                    class="w-fit inline-flex self-center items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Take
                    it !!</button>
            </form>
        </div>
    @else
        <div class="text-center p-8 flex flex-col gap-12">
            <h1 class="font-bold">
                Congratulations, you take a place on <span class="text-yellow-400">{{ $event->title }}</span> event
            </h1>
            <p>But you will wait until it's acceppted </p>

            <button data-modal-toggle="after-booking"
                class="w-fit inline-flex self-center items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Okey !!</button>
        </div>
    @endif
</x-modals.modal>
