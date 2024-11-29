@extends('layouts.admin_view')

@section('title', 'Admin')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{asset('assets/img/usuario_icon_default.png')}}" alt="Foto de Juan Pérez" class="w-30 h-30 rounded-full mx-auto mb-4">
                <p class="nombreUsuario text-xl text-red-500 font-bold uppercase mb-2">Juan Pérez</p>
                <p class="text-sm text-stone-400 mb-4">juanPerez777@hotmail.com</p>
                <div class="profile-info">
                    <h5 class="text-lg text-red-500 font-semibold mb-2">Presentación</h5>
                    <p class="text-sm">Hola Mundo, es hora de patear.</p>
                </div>
                <button class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 rounded-md mt-4">Editar
                    Perfil</button>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información Personal</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Nombre:</strong> Juan Pérez</li>
                        <li><strong>Email:</strong> juanPerez777@hotmail.com</li>
                        <li><strong>Edad:</strong> 25 años</li>
                        <li><strong>Deporte:</strong> Fútbol</li>
                        <li><strong>Rol:</strong> Jugador</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Estadísticas</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Partidos Jugados:</strong> 30</li>
                        <li><strong>Goles Marcados:</strong> 5</li>
                        <li><strong>Asistencias:</strong> 3</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Logros</h5>
                    <ul class="text-sm space-y-2">
                        <li>Ganador del Balón de Oro 2024</li>
                        <li>Campeón de la Liga MX 2024</li>
                        <li>Ganador del Premio Puskás 2024</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection