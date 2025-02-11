<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Nama Aplikasi">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('pwa-icon/ios/180.png') }}">
        <meta name="mobile-web-app-capable" content="yes">

        @PwaHead
        <title>{{ config('app.name', 'Sehati') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('shop-photos/logo_sehati_nobg.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        

        <!-- Scripts -->
        @stack('leaflet')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

        <!-- Leaflet -->
        @stack('leaflet_create')

</head>
<body class="font-sans antialiased">
        <x-banner />

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
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        @stack('scrollreveal-show')
        @stack('scrollreveal-index')
        @stack('leaflet_create_js')
        @RegisterServiceWorkerScript
    </body>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.getRegistration().then((registration) => {
                if (registration) {
                    registration.update();
                }
            });
        }
    </script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.addEventListener('controllerchange', function() {
                alert("Aplikasi telah diperbarui! Silakan refresh halaman untuk melihat perubahan.");
            });
        }
    </script>
</html>
