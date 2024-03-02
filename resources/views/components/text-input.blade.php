@props(['disabled' => false, 'name'])

<input name="{{ $name }}" id="{{ $name }}" :value="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' =>
            'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
    ]) !!}>
