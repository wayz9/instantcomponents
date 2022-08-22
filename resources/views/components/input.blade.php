@props([
    'type' => 'text',
    'name'
])

<input {{ $attributes }} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="block w-full py-2 px-3.5 text-base font-medium text-gray-900 dark:text-gray-100 rounded-lg ring-1 ring-inset ring-gray-300 dark:bg-gray-800/40 dark:ring-gray-700/50 dark:disabled:bg-gray-900 dark:disabled:ring-gray-800 focus:ring-2 focus:ring-primary-500 disabled:ring-gray-200 focus:outline-none @error($name) ring-red-500 @enderror disabled:cursor-not-allowed transition-colors disabled:bg-gray-50" value="{{ @old($name) }}">