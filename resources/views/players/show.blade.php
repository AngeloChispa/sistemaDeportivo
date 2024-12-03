@extends('layouts.admin_view')

@section('title', 'Player')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{asset('assets/img/usuario_icon_default.png')}}" alt="Foto de Juan Pérez" class="w-30 h-30 rounded-full mx-auto mb-4">
                <p class="nombreUsuario text-xl text-red-500 font-bold uppercase mb-2">Juan Pérez</p>
                <p class="text-sm text-stone-400 mb-4">Retirado</p>
                <div class="pt-4">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Estadísticas</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Partidos Jugados:</strong> 30</li>
                        <li><strong>Goles Marcados:</strong> 5</li>
                        <li><strong>Asistencias:</strong> 3</li>
                    </ul>
                </div>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información Personal</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Id: </strong>idUsuario</li>
                        <li><strong>Nombre: </strong>Nombre completo con apellidos</li>
                        <li><strong>Fecha de nacimiento: </strong>10/10/2010</li>
                        <li><strong>Lugar de nacimiento: </strong>usuario lugar nacimiento</li>
                        <li><strong>Nacionalidad: </strong>usurio nacionalidad</li>
                        <li><strong>Altura: </strong>1.74</li>
                        <li><strong>Lado dominante: </strong>Izquierdo</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Trayectoria de equipos</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                        </a>

                    </div>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Títulos</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="titulos">
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="titulos">
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection
