<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>
    @yield('title')
  </title>
</head>
<body class="bg-black font-sans">

    <!-- Barra lateral izquierda -->
    <div class="fixed top-0 left-0 h-full w-52 bg-stone-900 text-white p-4 flex flex-col space-y-4">
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Inicio</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Torneos</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Equipos y Jugadores</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Partidos</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Estadísticas y Reportes</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Clasificación</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Comunicación</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Instalaciones</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Seguridad y Auditoría</div>
        </div>
        <div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
            <div class="icon-container">
                <div class="icon"></div>
            </div>
            <div class="appbar-text">Patrocinadores y Finanzas</div>
        </div>
    </div>

    <!-- Barra navbar -->
    <div class="ml-52">
        <div class="relative bg-stone-900 text-white p-4">
            <div class="flex justify-center">
                <div class="bg-zinc-700 hover:bg-zinc-600 p-1 px-44 rounded-full duration-200">
                    <div class="text-slate-300 left-0.5 text-sm tracking-wider opacity-45">Buscar...</div>
                </div>
            </div>
            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-red-700 w-9 h-9 p-1 rounded-full flex items-center justify-center font-medium">
                <div class="text-lg">JZ</div>
            </div>
        </div>

        @yield('content')
    </div>

</body>
</html>
