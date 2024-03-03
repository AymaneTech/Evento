<x-layouts.layout>
    <div class="bg-white">


        <section class="bg-[#FCF8F1] bg-opacity-30 py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">A social media for learners</p>
                        <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-8xl">Connect & learn from the experts</h1>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">Grow your career fast with right mentor.</p>

                        <a href="#" title="" class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400" role="button">
                            Join for free
                            <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>

                        <p class="mt-5 text-gray-600">Already joined us? <a href="#" title="" class="text-black transition-all duration-200 hover:underline">Log in</a></p>
                    </div>

                    <div>
                        <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Up Coming Events</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>


            <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                @foreach ($events as $event)
                <div class="w-[400px]">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full" src="{{ asset("storage/images/". $event->images[0]->path ) }}" alt="" />
                    </a>
                    <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9"> {{ $event->category->name }} </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> {{ $event->title }} </a>
                    </p>
                    <div class="flex gap-4 items-center font-semibold">
                        <x-icon name="location" />
                        <p class="mt-4 text-gray-600">{{ $event->location }}</p>
                    </div>
                    <div class="flex gap-4 items-center font-bold text-rose-500">
                        <x-icon name="price" />
                        <p class="mt-4 ">{{ $event->price }} MAD</p>
                    </div>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> {{ $event->organiser->name }} . {{ $event->date->format("M Y d") }} </span>
                </div>
                @endforeach


            </div>
        </div>
    </section>


</x-layouts.layout>
