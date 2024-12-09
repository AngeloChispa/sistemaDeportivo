@extends('layouts.admin_view')

@section('title', 'User')

@section('content')
    {{-- Tabla con equipos favoritos --}}
    <div class="p-10">
        <div>
            @component('_components.table_export')
            @slot('title')
                Equipos favoritos
            @endslot
            @slot('p_content')
                Tabla que muestra tus equipos favoritos
            @endslot

            @slot('content_head')
                {{--  @empty($teams)
                <tr>
                    <th>Sin favoritos</th>
                </tr>
            @else --}}
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Deporte</th>
                    <th>Escudo</th>
                </tr>
                {{-- @endempty --}}
            @endslot
            @slot('content_body')
                {{-- @forelse ($teams as $team)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $team->id }}</td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->city }}</td>
                    <td>{{ $team->state }}</td>
                    <td>{{ $team->sport->name }}</td>
                    <td>
                        @if ($team->shield)
                            <img src="{{ asset('storage/' . $team->shield) }}" alt="Logo de {{ $team->shield }}" width="100">
                        @else
                            Sin logo
                        @endif
                    </td>
                </tr>
            @empty
                <h1>¡Ups! Parece ser que no has marcado ningún equipo como favorito</h1>
            @endforelse --}}
                <tr class="border-b border-stone-700 h-16">
                    <td>1</td>
                    <td>Ejemplo Nombre</td>
                    <td>Ejemplo Ciudad</td>
                    <td>Ejemplo Estado</td>
                    <td>Ejemplo Deporte</td>
                    <td>Ejemplo Escudo</td>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <td>2</td>
                    <td>Ejemplo Nombre</td>
                    <td>Ejemplo Ciudad</td>
                    <td>Ejemplo Estado</td>
                    <td>Ejemplo Deporte</td>
                    <td>Ejemplo Escudo</td>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <td>3</td>
                    <td>Ejemplo Nombre</td>
                    <td>Ejemplo Ciudad</td>
                    <td>Ejemplo Estado</td>
                    <td>Ejemplo Deporte</td>
                    <td>Ejemplo Escudo</td>
                </tr>
            @endslot
        @endcomponent
        </div>

        {{-- Partidos donde participan sus equipos favoritos --}}
        <div class="pt-10">
            <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Partidos en los que participan tus equipos favoritos</h2>
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
    </div>
@endsection
