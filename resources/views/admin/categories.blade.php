<x-layouts.dashboard-layout :breadcrumb="['Dashboard ', 'Categories']">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                <div
                    class="flex justify-between mb-8 p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="">Categories table</h6>
                    <x-modals.button name="category-create">create new category</x-modals.button>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center justify-center w-full mb-0 align-top border-collapse text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <x-elements.th>Id</x-elements.th>
                                    <x-elements.th>Name</x-elements.th>
                                    <x-elements.th>Description</x-elements.th>
                                    <x-elements.th>Actions</x-elements.th>
                                </tr>
                            </thead>
                            <tbody class="border-t">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="{{ asset('storage/images/'. $category->image->path) }}"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                        alt="spotify" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal ">{{ $category->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <x-elements.td size="text-sm">{{ $category->name }}</x-elements.td>
                                        <x-elements.td>{{ $category->description }}</x-elements.td>
                                        <x-elements.td>{{ $category->events_count }}</x-elements.td>
                                        <td
                                            class="p-2 flex gap-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <form action="{{ route('admin.categories.destroy', $category->slug) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <x-icon name="delete" />
                                            </form>
                                            <button data-modal-target="category-update"
                                                data-modal-toggle="category-update" type="submit"
                                                data-slug="{{ $category->slug }}" data-name="{{ $category->name }}"
                                                data-description="{{ $category->description }}">
                                                <x-icon name="update" />
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div>{{ $categories->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modals.category-create />
    <x-modals.category-update />
    <script src="/assets/js/category-update.js"></script>

</x-layouts.dashboard-layout>
