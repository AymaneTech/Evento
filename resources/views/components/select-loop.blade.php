@props(["data", "accessor" => "name", "name"])

<div class="">
    <label for="{{$name}}" class="block mb-2 text-sm font-medium text-gray-900">{{$name}}</label>
    <select id="{{$name}}" name="{{ $name }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-[180px] p-2.5">
        @foreach($data as $item)
            <option value="{{ $item->id }}">{{ $item->$accessor }}</option>
        @endforeach
    </select>
</div>
