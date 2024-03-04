@php use Carbon\Carbon; @endphp
@props(['statistics'])
<div class="flex flex-wrap -mx-3">
    <x-cards.statistics>
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
                <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Today's Money</p>
                <h5 class="mb-2 font-bold dark:text-white">${{ $statistics['bookingMoney'] }}</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                    today's bookings
                </p>
            </div>
        </div>
        <div class="px-3 text-right basis-1/3">
            <div
                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
            </div>
        </div>
    </x-cards.statistics>

    <x-cards.statistics>
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
                <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Categories total</p>
                <h5 class="mb-2 font-bold dark:text-white">{{ $statistics['categoriesCount'] }}</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                    the categories
                </p>
            </div>
        </div>
        <div class="px-3 text-right basis-1/3">
            <div
                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
            </div>
        </div>
    </x-cards.statistics>


    <x-cards.statistics>
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
                <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Events total</p>
                <h5 class="mb-2 font-bold dark:text-white">{{ $statistics['eventsCount'] }}</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                    events
                </p>
            </div>
        </div>
        <div class="px-3 text-right basis-1/3">
            <div
                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
            </div>
        </div>
    </x-cards.statistics>

    <x-cards.statistics>
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
                <p
                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                    Today Bookings</p>
                <h5 class="mb-2 font-bold dark:text-white">{{ $statistics['todayBookings'] }}</h5>
                <p class="mb-0 dark:text-white dark:opacity-60">
                    today {{ Carbon::today()->format('M d Y') }}
                </p>
            </div>
        </div>
        <div class="px-3 text-right basis-1/3">
            <div
                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
            </div>
        </div>
    </x-cards.statistics>
</div>
