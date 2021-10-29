@props(['action'])

<form action="{{ route($action) }}" method="POST">
    @csrf

    {{ $slot }}
</form>