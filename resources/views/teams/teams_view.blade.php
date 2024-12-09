@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla de equipos --}}
    @component('_components.table')
        @slot('title')
            Equipos
        @endslot
        @slot('p_content')
            Tabla que muestra los equipos registrados hasta el momento.
        @endslot
        @slot('reference', 'teams.create')
        @slot('create_something', 'Crear Equipo')

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Deporte</th>
                <th>Escudo</th>
                @auth
                    <th colspan="3">Acción</th>
                @endauth
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($teams as $team)
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
                    @auth
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}"
                                class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('teams.show', $team->id) }}"
                                class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                        </td>
                    @endauth
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection

@endsection
