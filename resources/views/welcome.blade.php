<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'المنصة الصحية')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="">

    <x-nav />
    <x-header />
    <x-cadrs />
    <x-doctors />
    <x-categories />
    <x-joins />
    <x-partners />
    <x-footer />

</body>
</html>

