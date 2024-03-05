@props(["enum", "name"])

<div class="">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">{{$name ?? false}}</label>
    <select id="{{$name ?? false}}" name="{{ $name ?? false }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-[180px] p-2.5">
        @foreach($enum as $item)
        <option value="{{ $item->value }}">{{ $item->value }}</option>
        @endforeach
    </select>
</div>
