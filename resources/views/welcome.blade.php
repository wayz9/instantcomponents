<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-white dark:bg-gray-900 flex h-screen items-center justify-center w-full font-sans">
    <div class="max-w-xs w-full">
        <x-form action="post.create">
            <div>
                <x-label for="input" class="mb-1">Disabled</x-label>
                <x-input name="input" disabled/>
                <x-validation-error name="input" />
            </div>

            <div class="mt-10">
                <x-label for="input" class="mb-1">Input</x-label>
                <x-input name="input" autocomplete="off"/>
                <x-validation-error name="input" />
            </div>

            <div class="mt-10 flex flex-col gap-y-2">
                <div class="flex items-center gap-2.5">
                    <x-radio required name="radio" value="0" id="cool"/>
                    <x-label for="cool">Cool Value</x-label>
                </div>
                <div class="flex items-center gap-2.5">
                    <x-radio required name="radio" value="1" id="not"/>
                    <x-label for="not">Not Value</x-label>
                </div>
                <div class="flex items-center gap-2.5">
                    <x-radio disabled name="radio" value="2" id="crazy"/>
                    <x-label for="crazy">Crazy Value</x-label>
                </div>
                <x-validation-error name="radio" />
            </div>

            <div class="mt-10 flex flex-col gap-y-2">
                <div class="flex items-center gap-2.5">
                    <x-checkbox disabled name="termsofservice" id="termsofservice" value="1"/>
                    <x-label for="termsofservice">I agree to conditions of <a href="#">Terms of Service</a>.</x-label>
                </div>
                <div class="mt-10 flex items-center gap-2.5">
                    <x-checkbox name="working" id="working" value="1"/>
                    <x-label for="working">I agree to conditions of <a href="#">Terms of Service</a>.</x-label>
                </div>
                <x-validation-error name="working" />
            </div>

            <div class="mt-10">
                <x-label for="select" class="mb-1">Select Something</x-label>
                <x-select name="select"> 
                    <option value="1">Hello</option>
                    <option value="1">223123</option>
                    <option value="1">123123213</option>
                    <option value="1">Heasasdasdllo</option>
                    <option value="1">Hello</option>
                    <option value="1">Hello</option>
                    <option value="1">Hello</option>
                    <option value="1">asdasd</option>
                </x-select>
            </div>

            <div class="mt-10">
                <x-button type="button">
                    Primary Button
                </x-button>
            </div>
        </x-form>
    </div>
</body>
</html>