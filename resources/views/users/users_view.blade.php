@extends('layouts.admin_view')

@section('title', 'Users table')

@section('content')
    @component('_components.table')
        @slot('title')
            Usuarios
        @endslot
        @slot('p_content')
            Tabla que muestra los usuarios registrados hasta el momento.
        @endslot
        @slot('reference', 'user.create')
        @slot('create_something', 'Registrar Usuario')

        @slot('content_head')
            @empty($people)
                <th>Tabla vacía</th>
            @else
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Fecha de registro</th>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <th colspan="4" class="w-1/3">Acción</th>
                        @endif
                    @endauth
                </tr>
            @endempty
        @endslot
        @slot('content_body')
            @forelse ($people as $person)
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
                        @auth
                            @if (Auth::user()->rol_id === 1)
                                <td>
                                    <a href="{{ route('addTeams') }}"
                                        class="font-medium text-zinc-200 bg-purple-500 sm:rounded-lg p-2 hover:bg-purple-900">Hacer
                                        Admin</a>
                                </td>
                                <td>
                                    <a href="{{ route('user.edit', $person->id) }}"
                                        class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('user.destroy', $person->user->id) }}" method="POST"
                                        class="inline formulario-eliminar">
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
                            @endif
                        @endauth
                    </tr>
                @endif
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
