<!DOCTYPE html>
<style>
    body {
        background-color: #0e0e0e;
    }
</style>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>

<body class="text-white font-sans">
    @include('layouts._partials.navbar')
    @auth
        @if (Auth::user()->rol_id === 1)
        @include('layouts._partials.sidebarAdmin')
        @endif
    @endauth

    {{-- Content --}}
    <div class="pt-16 sm:ml-64">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @yield('scripts')
</body>

</html>
