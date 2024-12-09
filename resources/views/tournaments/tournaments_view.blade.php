@extends('layouts.admin_view')

@section('title', 'Tournaments table')

@section('content')
    @component('_components.table')
        @slot('title')
            Torneos
        @endslot
        @slot('p_content')
            Tabla que muestra los torneos registrados hasta el momento.
        @endslot

        @slot('reference', 'tournaments.create')
        @slot('create_something', 'Registrar Torneo')

        @slot('content_head')
            @empty($tournaments)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Logo</th>
                    <th>Tipo</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de finalización</th>
                    <th>Descripción</th>
                    <th colspan="4" class="w-1/3">Acción</th>
                </tr>
            @endempty
        @endslot
        @slot('content_body')
            @forelse ($tournaments as $tournament)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{ $tournament->id }}</td>
                    <td>{{ $tournament->name }}</td>
                    <td>
                        @if ($tournament->icon)
                            <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Logo de {{ $tournament->name }}"
                                width="50">
                        @else
                            Sin logo
                        @endif
                    </td>
                    <td>
                        @switch($tournament->type)
                            @case(1)
                                <p class="text-sm text-stone-400">Liga</p>
                            @break

                            @case(2)
                                <p class="text-sm text-stone-400">Eliminatoria</p>
                            @break

                            @case(3)
                                <p class="text-sm text-stone-400">Liga y Eliminación</p>
                            @break

                            @default
                                <p class="text-sm text-stone-400">CHUCHO</p>
                        @endswitch
                    </td>
                    <td>{{ $tournament->start_date }}</td>
                    <td>{{ $tournament->end_date }}</td>
                    <td>{{ $tournament->description }}</td>
                    <td>
                        <a href="{{ route('addTeams') }}"
                            class="font-medium text-zinc-200 bg-purple-500 sm:rounded-lg p-2 hover:bg-purple-900">Añadir equipos</a>
                    </td>
                    <td>
                        <a href="{{ route('tournaments.edit', $tournament->id) }}"
                            class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST"
                            class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('tournaments.show', $tournament->id) }}"
                            class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                    </td>
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
