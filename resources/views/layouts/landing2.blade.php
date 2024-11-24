<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="@yield('styles')">
  <title>
    @yield('title')
  </title>
</head>
<!-- fondo negro -->
<body class="bg-black font-sans">

     @yield('content')


     @yield('scripts')
    </body>
</html>
