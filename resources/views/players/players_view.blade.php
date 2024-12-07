@extends('layouts.admin_view')


@section('title', 'Players table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Jugadores
        @endslot
        @slot('p_content')
            Tabla que muestra aquellos usuarios que se les ha asignado el rol de jugador.
        @endslot
        @slot('reference', 'players.create')
        @slot('create_something', 'Crear Jugador')

        {{-- @forelse ($players as $player)

        @empty

        @endforelse
         --}}
        @slot('content_head')
            @empty($people)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>id</th>
                    <th>ID del Jugador</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Estado</th>
                    <th>Altura</th>
                    <th>Lado dominante</th>
                    <th>Fecha de registro</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endempty

        @endslot
        @slot('content_body')
            @forelse ($people as $person)
                @if ($person->player)
                    <tr class="border-b border-stone-700 h-16">
                        <td>{{ $person->id }}</td>
                        <td>{{ $person->player->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->birthdate }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td>{{ $person->player->status }}</td>
                        <td>{{ $person->player->height }}</td>
                        <td>
                            {{ $person->player->bestSide }}
                        </td>
                        <td></td>
                        <td>
                            <a href="{{route("players.edit",$person->player->id)}}"
                                class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('players.destroy', $person->player->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                    Borrar
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('players.show', $person->id) }}"
                                class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                    </tr>
                @endif
            @empty
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @component('_components.swal')
        @endcomponent
    @endsection

@endsection
