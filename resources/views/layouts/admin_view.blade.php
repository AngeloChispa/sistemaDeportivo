<!DOCTYPE html>
<style>
    body{
        background-color: #0e0e0e;
    }

    .w-64,.p-12,.p-4{
        background-color: #161616;
    }

    .text-red-500{
        color: #EA454C;
        background-color: #161616
    }
    
    .bg-gray-700{
        background-color: #161616;
    }
    
    .rows td{
        padding: 10px;
        text-align: center;
    }
</style>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @yield('styles')
</head>

<body class="text-white font-sans">
    @include('layouts._partials.navbar')
    <div class="flex">
        @include('layouts._partials.sidebar')
        {{-- Content --}}
        <div class="flex-1 p-10">
            <h1 class="font-bold text-center text-4xl">@yield('name')</h1>
            @yield('content')
            {{--Table--}}
            <div class="overflow-x-auto p-5 table">
                @include('layouts.table-layout')
            </div>

        </div>
    </div>
    @yield('scripts')
</body>
</html>
