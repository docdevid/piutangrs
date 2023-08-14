<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" d-flex flex-column">
        <script src="./dist/js/demo-theme.min.js?1691487027"></script>
        <div class="page page-center">
            <div class="container container-tight py-4">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        <x-tabler-logo />
                    </a>
                </div>

                {{$slot}}

            </div>
        </div>
    </body>
</html>
