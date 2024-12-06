@extends('layouts.admin_view')

@section('title', 'Los jaguares de la UPV')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <!-- Card de Información del Torneo -->
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Escudo torneo" class="w-30 h-30 rounded-full mx-auto mb-4">
                <p class="name text-xl text-red-500 font-bold uppercase mb-2">{{ $tournament->name }}</p>
                <p class="text-sm">{{ $tournament->description }}</p>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <!-- Información del Torneo -->
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información del Torneo</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Id: </strong>{{ $tournament->id }}</li>
                        <li><strong>Tipo de torneo: </strong>{{ $tournament->type }}</li>
                        <li><strong>Fecha de inicio: </strong>{{ \Carbon\Carbon::parse($tournament->start_date)->format('d/m/Y') }}</li>
                        <li><strong>Fecha de terminación: </strong>{{ \Carbon\Carbon::parse($tournament->end_date)->format('d/m/Y') }}</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Equipos</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="equipo">
                            <p class="text-center">Nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                            <p class="text-center">Nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                            <p class="text-center">Nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="equipo">
                            <p class="text-center">Nombre</p>
                        </a>
                    </div>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Patrocinadores</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">Nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">Nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">Nombre</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 gap-6">
        @component('_components.table_export')
            @slot('title')
                Clasificación
            @endslot
            @slot('p_content')
                Posición en que los equipos se encuentran dentro del torneo.
            @endslot
            @slot('reference', 'players.create')
            @slot('create_something', 'Registrar Jugador')

            @slot('content_head')
                {{--  @empty($clasifications)
                <tr>
                    <th>No data</th>
                </tr>
                @else
                <tr>
                    <th colspan="2">Equipo</th>
                    <th class="w-24">PJ</th>
                    <th class="w-24">G</th>
                    <th class="w-24">E</th>
                    <th class="w-24">P</th>
                    <th class="w-24">GF</th>
                    <th class="w-24">GC</th>
                    <th>DG</th>
                    <th class="w-24font-bold" >Pts</th>
                </tr>
            @endempty --}}

                <tr>
                    <th colspan="2">Equipo</th>
                    <th class="w-24">PJ</th>
                    <th class="w-24">G</th>
                    <th class="w-24">E</th>
                    <th class="w-24">P</th>
                    <th class="w-24">GF</th>
                    <th class="w-24">GC</th>
                    <th class="w-24">DG</th>
                    <th class="w-24 font-bold">Pts</th>
                </tr>
            @endslot
            @slot('content_body')
                {{-- @forelse ($people as $person)
                    <tr class="border-b border-stone-700 h-16">
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                       <th></th>
                    </tr>
            @empty
                <tr>
                    <td class="text-center">No hay Jugadores registrados aún.</td>
                </tr>
            @endforelse --}}
                <tr class="border-b border-stone-700 h-12 hover:bg-[#333333]">

                    <td style="width: 50px;" class="hover:bg-transparent">1</td>
                    <td class="hover:bg-transparent">Liverpool</td>
                    <td>12</td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>24</td>
                    <td>8</td>
                    <td>16</td>
                    <td class=" font-black">31</td>
                </tr>
            @endslot
        @endcomponent
    </div>
@endsection
