<x-layouts.layout>
    <div class="bg-white">
        <section id="home" class="bg-[#FCF8F1] bg-opacity-30 py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">Unlock the Door to Unforgettable Events!</p>
                        <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-8xl">Your Event, Your Way – Book Now!</h1>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">Embark on Your Event Journey Today!
                        </p>

                        <a href="/register" title=""
                            class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400"
                            role="button">
                            Join for free
                            <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>

                        <p class="mt-5 text-gray-600">Already joined us? <a href="/login" title=""
                                class="text-black transition-all duration-200 hover:underline">Log
                                in</a></p>
                    </div>

                    <div class="">
                        <img class="w-full"
                            src="/assets/images/eventhero.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="categories" class="slider-container m-12s">
        <div class="headings text-center text-4xl my-8">
            <p>All the categories</p>
            <h2 class="font-bold">best of our categories</h2>
        </div>
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
            <div class="w-full relative flex items-center justify-center">
                <x-icon name="left-arrow" />
                <div class="container mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider"
                        class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-center transition ease-out duration-700">
                        @foreach ($categories as $category)
                            <div class="doctor-card flex flex-col gap-12 hover:shadow-2xl rounded-xl p-4 shadow-xl">
                                <div class="w-[350px]">
                                    <img class="h-64 w-full mb-4  rounded-xl"
                                        src="{{ asset('storage/images/' . $category->image->path) }}" alt="">
                                    <div class="flex justify-between mb-4">
                                        <h3 class="text-2xl font-bold hover:text-blue-700">
                                            <a href="{{ route("category.events", $category->slug) }}">{{ $category->name }}</a>
                                        </h3>
                                    </div>
                                    <p>{{ $category->description }}</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <x-icon name="right-arrow" />
            </div>
        </div>
    </section>

    <section id="events" class="py-10 bg-white sm:py-16 lg:py-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Up Coming Events</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>
            <div class="pt-2 mt-4 mb-0 relative text-center text-gray-600">
                <input id="searchInput"
                    class=" border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search for any event">
            </div>
            <div class="filters flex justify-center gap-2">
                <button id="category" class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400">All</button>
                @foreach ($categories as $category)
                    <button id="category"
                        class="inline-flex items-center px-6 py-4 mt-4 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400">{{ $category->name }}</button>
                @endforeach
            </div>
            <div id="events-section"
                class="grid max-w-md grid-cols-1 mx-auto mt-4 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                @foreach ($events as $event)
                    <div class="w-[400px] shadow-xl p-4 rounded-2xl">
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-72 rounded-2xl"
                                src="{{ asset('storage/images/' . $event->images[0]->path) }}" alt="" />
                        </a>
                        <span
                            class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">
                            {{ $event->category->name }} </span>
                        <p class="mt-6 ml-2 text-xl font-semibold">
                            <a href="#" title="" class="text-black"> {{ $event->title }} </a>
                        </p>
                        <div class="flex gap-4 items-center font-semibold">
                            <x-icon name="location" />
                            <p class="mt-4 text-gray-600">{{ $event->location }}</p>
                        </div>
                        <div class="flex gap-4 items-center font-bold text-red-500">
                            <x-icon name="price" />
                            <p class="mt-4 ">{{ $event->price }} MAD</p>
                        </div>
                        <div class="flex gap-4 items-center font-bold">
                            <x-icon name="price" />
                            <p>{{ $event->date->format('d M y') }}</p>
                        </div>
                        <div class="my-2">
                            <a href=" {{ route('event.show', $event->slug) }}" class="inline-flex items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Buy a ticket</a>

                        </div>

                        <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                        <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase">
                            {{ $event->organiser->name }} </span>
                    </div>
                @endforeach
                <div>
                    {{$events->links()}}
                </div>


            </div>
            <div id="filterResult"
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
            </div>
        </div>
    </section>

    <script src="/assets/js/caroussel.js"></script>
    <script src="/assets/js/search.js"></script>
</x-layouts.layout>
