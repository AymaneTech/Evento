<x-modals.modal name="event-update" width="4xl" title="update this event">
    <form id="event-edit" method="POST" class="p-4 md:p-5" enctype="multipart/form-data">
        @method("patch")
        @csrf
        <div class="flex flex-col gap-4 mb-4">
            <div class="col-span-2">
                <x-text-input type="text" name="title" placeholder="Enter event name !!"/>
            </div>
            <div class="flex justify-between gap-4 ">
                <x-text-input placeholder="enter the number of seats" type="number" name="numberOfSeats"/>
                <x-text-input placeholder="enter price" type="number" name="price"/>
                <x-text-input placeholder="enter event" type="text" name="location"/>
            </div>
            <div class="flex justify-between gap-4 ">
                <x-select-loop name="category_id" :data="$categories"/>
                <x-select-enum name="bookingType" :enum="App\Enums\BookingType::cases()"/>
                <div class="flex flex-col">
                    <x-input-label>Event Date</x-input-label>
                    <x-text-input name="date" type="datetime-local"/>
                </div>
            </div>
            <div class="col-span-2">
                <x-text-input type="file" name="images[]" multiple/>
            </div>
            <div class="col-span-2">
                <textarea id="description" rows="4" name="description"
                          class="text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                          placeholder="Write event description here"></textarea>
            </div>
        </div>
        <div class="flex-none text-right">
            <button type="submit"
                    class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">
                <i class="fas fa-plus"> </i>&nbsp;&nbsp;Add New Card
            </button>
        </div>
    </form>
</x-modals.modal>
