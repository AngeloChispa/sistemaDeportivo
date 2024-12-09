@extends('layouts.admin_view')

@section('title', 'Ascender')

@section('content')
    <div class="p-5">
        @component('_components.table_export')
            @slot('title')
                Usuarios
            @endslot
            @slot('p_content')
                Tabla que muestra los usuarios a los cuales se pueden registrar dentro de otras tablas como lo
                son árbitros, jugadores y entrenadores.
            @endslot
            @slot('reference', 'user.create')
            @slot('create_something', 'Registrar Usuario')

            @slot('content_head')
                {{-- @empty($people)
                <th>Tabla vacía</th>
            @else
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Jugador</th>
                    <th>Entrenador</th>
                    <th>Árbitro</th>
                </tr>
                @endempty --}}
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endslot
            @slot('content_body')
                {{-- @forelse ($people as $person)
                @if ($person->user)
                    <tr class="border-b border-stone-700 h-16 hover:bg-stone-800 text-xs">
                        <td>{{ $person->user->id }}</td>
                        <td>{{ $person->user->username }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->birthdate }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td>{{ $person->user->phone }}</td>
                        <td>{{ $person->user->email }}</td>
                        <td>{{ $person->user->up_date }}</td>
                        <td>
                            <a href="{{ route('addTeams') }}"
                                class="font-medium text-zinc-200 bg-purple-500 sm:rounded-lg p-2 hover:bg-purple-900">Hacer Admin</a>
                        </td>
                        <td>
                            <a href="{{ route('user.edit', $person->id) }}"
                                class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $person->user->id) }}" method="POST" class="inline formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                    Borrar
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('user.show', $person->id) }}"
                                class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse --}}
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>id</td>
                    <td>usuario</td>
                    <td>nombre</td>
                    <td>apellidos</td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Ascender a
                            Jugador</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ascender
                            a
                            Entrenador</a>
                    </td>
                    <td>
                        <a href="#"
                            class="font-medium text-zinc-200 bg-purple-500 sm:rounded-lg p-2 hover:bg-purple-600">Ascender a
                            Árbitro</a>
                    </td>
                </tr>
            @endslot
        @endcomponent
    </div>
@endsection
