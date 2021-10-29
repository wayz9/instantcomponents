@props(['name'])

@error($name)
    <span class="inline-block mt-2 text-xs font-medium text-red-600">{{ $message }}</span>
@enderror   

