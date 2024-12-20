<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire Filemanager</title>

        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="manifest" href="/site.webmanifest" />

        @vite('resources/css/app.css')
    </head>
    <body class="flex items-center justify-center h-screen px-4">

        <div class="flex flex-wrap flex-col items-center justify-center">
            <div>
                <img src="{{ asset('img/icon.svg') }}" width="300" height="300" alt="Icon: Laravel Livewire Filemanager">
            </div>

            <div>
                <h1 class="text-3xl font-semibold">Livewire Filemanager</h1>
            </div>

            <div>
                <p class="mt-4">Livewire Filemanager is a simple, friendly and practical filemanager for your applications.</p>

                <p class="mt-4"><a href="https://github.com/livewire-filemanager/filemanager" target="_blank" class="underline underline-offset-4">Visit the github repository</a></p>

                <p class="mt-4">The documentation will be available soon.</p>

                <p class="mt-32">
                    <small>Made with love by <a href="https://x.com/yvesdesign" target="_blank" class="underline underline-offset-4">Yves Engetschwiler</a>, from <a href="https://bee-interactive.ch" target="_blank" class="underline underline-offset-4">Bee Interactive</a></small>
                </p>
            </div>
        </div>
    </body>
</html>
