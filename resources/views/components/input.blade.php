@props([
    'type' => 'text',
    'name'
])

<input {{ $attributes }} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="block w-full py-2 px-3.5 text-base font-medium text-gray-900 rounded-lg ring-1 ring-inset ring-gray-300 focus:ring-gray-400 disabled:ring-gray-200 focus:outline-none @error($name) ring-red-500 @enderror disabled:cursor-not-allowed transition-colors" value="{{ @old($name) }}">