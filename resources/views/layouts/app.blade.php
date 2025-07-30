<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'المنصة الصحية')</title>

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
            
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="">

        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')

        @livewireScripts
        
    </body>
    
</html>
