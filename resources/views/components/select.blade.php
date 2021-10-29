<select {{ $attributes }}
    class="block w-full py-2 px-3.5 text-base font-medium text-gray-900 rounded-lg ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-gray-400 disabled:ring-gray-200 focus:outline-none @error($name) ring-red-500 @enderror disabled:cursor-not-allowed transition-colors disabled:bg-gray-50"
    name="{{ $name }}" id="{{ $name }}">
    {{ $slot }}
</select>