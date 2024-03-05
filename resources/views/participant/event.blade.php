<x-layouts.layout>
    <section class="container mx-auto">
        <div class="content my-8">
            <div class="title text-center text-[#003]">
                <h1 class="font-bold text-4xl">{{ $event->title }}</h1>
            </div>

            <section class="flex items-center gap-10">
                <div id="default-carousel" class="my-8 relative w-[900px]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach ($event->images as $image)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/images/' . $image->path) }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class=" text-white booking-card bg-[#003] p-12 rounded-lg w-[600px]">
                    <h2 class="text-center font-bold text-2xl text-white">Evento</h2>
                    <div class="date">
                        <p>{{ $event->date->format('l d F Y') }} on {{ $event->date->format('H:i') }} <span>in
                                {{ $event->location }}</span></p>
                        <p>Opening in {{ $event->date->subHour()->format('H:i') }}</p>
                    </div>
                    <div class="my-2">
                            <input id="eventSlug" type="hidden" name="eventSlug" value="{{ $event->slug }}">
                            <button id="bookingButton" class="inline-flex items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Buy
                                a ticket</button>
                        </form>

                    </div>
                </div>
            </section>

            <div class="description my-12">
                <div class="title flex gap-12 items-center my-12">
                    <h2 class="font-bold text-3xl text-[#003]">Description</h2>
                    <div class="w-full h-[2px] bg-gray-300"></div>
                </div>
                <p>{{ $event->description }}</p>
            </div>
            <div class="description my-12">
                <div class="title flex gap-12 items-center my-12">
                    <h2 class="font-bold text-3xl text-[#003]">More Details</h2>
                    <div class="w-full h-[2px] bg-gray-300"></div>
                </div>
                <ul class="grid grid-cols-1 ml-16 md:ml-0 md:grid-cols-2 xl:grid-cols-4 gap-4">
                    <li class=""><span class="text-xl font-bold text-[#003]">Number Of Seats:
                        </span>{{ $event->numberOfSeats }}</li>
                    <li class=""><span class="text-xl font-bold text-[#003]">Taken Places:
                        </span>{{ $event->bookings_count }}</li>
                    <li class=""><span class="text-xl font-bold text-[#003]">Price: </span>{{ $event->price }}
                    </li>
                    <li class=""><span class="text-xl font-bold text-[#003]">date:
                        </span>{{ $event->date->diffForHumans() }}</li>
                    <li class=""><spanalert("hello")
                        class="text-xl font-bold text-[#003]">Category:
                        </span>{{ $event->category->name }}</li>
                    <li class=""><span class="text-xl font-bold text-[#003]">Location:
                        </span>{{ $event->location }}</li>
                    <li class=""><span class="text-xl font-bold text-[#003]">booking type:
                        </span id="bookingType">{{ $event->bookingType }}</li>
                    <li class=""><span class="text-xl font-bold text-[#003]">Organiser:
                        </span>{{ $event->organiser->name }}</li>
                </ul>
            </div>

        </div>
    </section>
    <script src="/assets/js/booking.js"></script>
</x-layouts.layout>
