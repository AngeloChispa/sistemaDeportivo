<!DOCTYPE html>
<style>
    body{
        background-color: #0e0e0e;
    }
</style>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body>
    @yield('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-stone-200 rounded-lg p-24">
            <h2 class="text-xl font-bold text-gray-800 mb-4">@yield('h2')</h2>
            @yield('data')
            @yield('link')
        </div>
    </div>
    @yield('scripts')
</body>
</html>