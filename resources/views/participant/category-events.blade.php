@php $events = $category->events@endphp
<x-layouts.layout>
    <div class="mx-auto container">
        <div id="events-section"
             class="grid max-w-md grid-cols-1 mx-auto mt-4 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
            @foreach ($events as $event)
                <div class="w-[400px] shadow-xl p-4 rounded-2xl">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-72 rounded-2xl"
                             src="{{ asset('storage/images/' . $event->images[0]->path) }}" alt=""/>
                    </a>
                    <span
                        class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">
                    {{ $event->organiser->name }}  </span>
                    <p class="mt-6 ml-2 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> {{ $event->title }} </a>
                    </p>
                    <div class="flex gap-4 items-center font-semibold">
                        <x-icon name="location"/>
                        <p class="mt-4 text-gray-600">{{ $event->location }}</p>
                    </div>
                    <div class="flex gap-4 items-center font-bold text-red-500">
                        <x-icon name="price"/>
                        <p class="mt-4 ">{{ $event->price }} MAD</p>
                    </div>
                    <div class="flex gap-4 items-center font-bold">
                        <x-icon name="price"/>
                        <p>{{ $event->date->format('d M y') }}</p>
                    </div>
                    <div class="my-2">
                        <a href=" {{ route('event.show', $event->slug) }}"
                           class="inline-flex items-center px-6 py-2.5 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:bg-yellow-400">Buy
                            a ticket</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.layout>
