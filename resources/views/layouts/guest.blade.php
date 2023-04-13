<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EURAN') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex pt-3 sm:pt-0 bg-gray-300 dark:bg-gray-300">
            <div>
                <a href="/">
                    <x-application-logo class=" fill-current text-gray-300" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mr-36 mt-auto mb-auto px-6 py-4 bg-emerald-900 drop-shadow-2xl overflow-hidden rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>