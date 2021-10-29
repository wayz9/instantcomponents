@props(['type' => 'button']) 

<button {{ $attributes }} type="{{ $type }}" class="py-3 px-6 text-sm font-bold text-white tracking-wider bg-primary-500 uppercase rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 disabled:bg-gray-400 disabled:text-gray-50 disabled:cursor-not-allowed active:bg-primary-600 transition-all">
    {{ $slot }}
</button>