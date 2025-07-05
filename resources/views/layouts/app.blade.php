<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flowbite Page</title>

    {{-- CSS Flowbite --}}
    <link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">

    {{-- Tambahan: bisa CSS sendiri / Tailwind CDN --}}
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Menu --}}
    @include('components.menu')

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    {{-- JS Flowbite --}}
    <script src="{{ asset('styles/flowbite.min.js') }}"></script>
</body>
</html>
