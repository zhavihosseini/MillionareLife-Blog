<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <style>
        @font-face {
            font-family: Vazir;
            src: url('public/font/Vazir.eot');
            src: url('public/font/Vazir.eot?#iefix') format('public/font/Vazir-opentype'),
            url('/font/Vazir.woff') format('woff'),
            url('public/font/Vazir.ttf') format('truetype');
            font-style: normal;
        }
        @font-face {
            font-family: Vazir;
            src: url('public/font/Vazir-Light.eot');
            src: url('public/font/Vazir-Light.eot?#iefix') format('public/font/Vazir-opentype'),
            url('public/font/Vazir-Light.woff') format('woff'),
            url('public/font/Vazir-Light.ttf') format('truetype');
            font-weight: 300;
        }
        @font-face {
            font-family: Yekan;
            src: url('./public/font/Yekan.eot');
            src: url('./public/font/Yekan.eot?#iefix') format('./public/font/Yekan-opentype'),
            url('./font/Yekan.woff') format('woff'),
            url('./public/font/Yekan.ttf') format('truetype');
            font-style: normal;
        }
        *{
            font-family: Vazir;
        }
    </style>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
