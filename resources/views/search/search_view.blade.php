@extends('layouts.admin_view')

@section('title')
    Palabra que se busca
@endSection

@section('content')
    <div class="text-zinc-200 p-5">
        <div class="pb-5">
            <h1 class="text-2xl font-semibold">Palabra buscada</h1>
            <p>Resultados encontrados para la búsqueda de 'palabra buscada'</p>
            <hr class="h-px bg-stone-500 border-0">
        </div>

        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Torneos</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">nombre</th>
                        <th>tipo</th>
                        <th>descripción</th>
                        <th class="w-1/6">Fecha de inicio</th>
                        <th class="w-1/6">Fecha de finalización</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del torneo NombreTorneo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Tipo</td>
                        <td>Descripción</td>
                        <td>inicio</td>
                        <td>fin</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del torneo NombreTorneo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Tipo</td>
                        <td>Descripción</td>
                        <td>inicio</td>
                        <td>fin</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del torneo NombreTorneo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Tipo</td>
                        <td>Descripción</td>
                        <td>inicio</td>
                        <td>fin</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Partidos</h2>
            <a href="#"
                class="p-5 m-2 rounded text-base font-semibold text-center text-zinc-300 bg-stone-900 flex justify-between items-center hover:bg-[#333333]">
                <span class="flex-1 text-right flex items-center justify-end">
                    NombreLocal
                    <img src="{{ asset('assets/img/realmadrid.png') }}" class="h-6 w-6 ml-2" alt="InserteNombreDelEquipoLocal">
                </span>
                <span class="w-20 text-center">0 - 0</span>
                <span class="flex-1 text-left flex items-center">
                    <img src="{{ asset('assets/img/barca.png') }}" class="h-6 w-6 mr-2" alt="InserteNombreDelEquipoVisitante">
                    NombreVisitante
                </span>
            </a>
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Equipos</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">nombre</th>
                        <th>Deporte</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del equipo InserteNombreEquipo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Deporte</td>
                        <td>Ciudad</td>
                        <td>Estado</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del equipo InserteNombreEquipo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Deporte</td>
                        <td>Ciudad</td>
                        <td>Estado</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Escudo del equipo InserteNombreEquipo">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Deporte</td>
                        <td>Ciudad</td>
                        <td>Estado</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Jugadores</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">nombre</th>
                        <th>Lugar de nacimiento</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de nacimiento</th>
                        <th>Altura</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>altura</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>altura</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>altura</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Entrenadores</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">nombre</th>
                        <th>Lugar de nacimiento</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de nacimiento</th>
                        <th>descripción</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>descripción</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>descripción</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>descripción</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Árbitros</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">nombre</th>
                        <th>Lugar de nacimiento</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de nacimiento</th>
                        <th>Descripción</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>Descripción</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>Descripción</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="Foto de perfil de InserteNombre">
                                    <p class="px-2">Nombre</p>
                                </div>
                            </a>
                        </td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                        <td>nacimiento</td>
                        <td>Descripción</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Instalaciones</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th>nombre</th>
                        <th>País</th>
                        <th>Estado</th>
                        <th>Ciudad</th>
                        <th class="w-1/6">Capacidad</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>País</td>
                        <td>Estado</td>
                        <td>Ciudad</td>
                        <td>Capacidad</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>País</td>
                        <td>Estado</td>
                        <td>Ciudad</td>
                        <td>Capacidad</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>País</td>
                        <td>Estado</td>
                        <td>Ciudad</td>
                        <td>Capacidad</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Patrocinadores</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th>nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Localización</th>
                        <th class="w-1/6">Tipo de patrocinio</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>Teléfono</td>
                        <td>Correo</td>
                        <td>Localización</td>
                        <td>Tipo de patrocinio</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>Teléfono</td>
                        <td>Correo</td>
                        <td>Localización</td>
                        <td>Tipo de patrocinio</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td>
                            <a href="#">Nombre</a>
                        </td>
                        <td>Teléfono</td>
                        <td>Correo</td>
                        <td>Localización</td>
                        <td>Tipo de patrocinio</td>
                    </tr>
                @endslot
            @endComponent
        </div>
        <div>
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Usuarios</h2>
            @component('_components.tableClassificationsIndex')
                @slot('content_head')
                    <tr class="text-sm font-normal">
                        <th>id</th>
                        <th class="w-1/6">Username</th>
                        <th>nombre</th>
                        <th>apellidos</th>
                        <th>correo</th>
                        <th class="w-1/6">fecha de registro</th>
                    </tr>
                @endslot
                @slot('content_body')
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>1</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="foto de perfil de InsertarNombreDeUsuario">
                                    <p class="px-2">Username</p>
                                </div>
                            </a>
                        </td>
                        <td>nombre</td>
                        <td>apellidos</td>
                        <td>correo</td>
                        <td>fecha de registro</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>2</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="foto de perfil de InsertarNombreDeUsuario">
                                    <p class="px-2">Username</p>
                                </div>
                            </a>
                        </td>
                        <td>nombre</td>
                        <td>apellidos</td>
                        <td>correo</td>
                        <td>fecha de registro</td>
                    </tr>
                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                        <td>3</td>
                        <td class="flex justify-center">
                            <a href="#">
                                <div class="flex place-items-center">
                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                        alt="foto de perfil de InsertarNombreDeUsuario">
                                    <p class="px-2">Username</p>
                                </div>
                            </a>
                        </td>
                        <td>nombre</td>
                        <td>apellidos</td>
                        <td>correo</td>
                        <td>fecha de registro</td>
                    </tr>
                @endslot
            @endComponent
        </div>
    </div>
@endSection
