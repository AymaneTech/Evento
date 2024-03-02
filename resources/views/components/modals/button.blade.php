@props(['name', 'styled' => true ])
<button data-modal-target="{{ $name }}" data-modal-toggle="{{ $name }}"
    class="{{ $styled ? "inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75" : ""}}"
    type="submit">
    {{ $slot }}
</button>

