@props(["name"])
<div class="flex flex-wrap -mx-3 mt-12">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="dark:text-white">{{ $name }}</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table
                        class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                        {{ $slot }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
