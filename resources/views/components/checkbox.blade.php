@props(['name', 'value'])

<input {{ $attributes->merge(['class' => 'peer w-6 h-6 ring-1 ring-inset ring-gray-300 focus:ring-primary-500
focus:outline-none focus:ring-2 text-primary-500 checked:ring-gray-50 disabled:bg-gray-50 disabled:ring-gray-200
disabled:cursor-not-allowed']) }} type="checkbox" name="{{ $name }}" value="{{ $value }}" {{ (@old($name)==$value) ?
'checked' : ''
}}>