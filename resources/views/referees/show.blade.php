@extends('layouts.admin_view')

@section('title', 'Nombre del árbitro')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo Los jaguares de la UPV"
                    class="w-30 h-30 rounded-full mx-auto mb-4">
                <p class="name text-xl text-red-500 font-bold uppercase mb-2">Nombre árbitro completo</p>
                <p class="text-sm">descripción</p>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información general</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Id: </strong>idUsuario</li>
                        <li><strong>Nombre: </strong>Nombre completo con apellidos</li>
                        <li><strong>Fecha de nacimiento: </strong>10/10/2010</li>
                        <li><strong>Lugar de nacimiento: </strong>usuario lugar nacimiento</li>
                        <li><strong>Nacionalidad: </strong>usurio nacionalidad</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6 mt-4">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Trayectoria de partidos</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>
                        <a class="flex-shrink-0 px-3 py-4 text-center" href="#">
                            <p>Partido</p>
                            <p>en que participó</p>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
