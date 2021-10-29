<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="antialiased bg-white flex h-screen items-center justify-center w-full font-sans">
    <div class="max-w-xs w-full">
        <x-form action="post.create">
            <div>
                <x-label for="input">Input</x-label>
                <x-input name="input" />
                <x-validation-error name="input" />
            </div>
    
            <div class="mt-10">
                <x-button type="submit">
                    Primary Button
                </x-button>
            </div>
        </x-form>
    </div>
</body>
</html>