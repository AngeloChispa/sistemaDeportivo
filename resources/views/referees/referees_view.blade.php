@extends('layouts.admin_view')

@section('title', 'Árbitros')

@section('content')
    @component('_components.table')
        @slot('title')
            Árbitros
        @endslot
        @slot('p_content')
            Tabla que muestra los árbitros registrados hasta el momento.
        @endslot
        @slot('reference', 'referees.create')
        @slot('create_something', 'Registrar Árbitro')

        @slot('content_head')
            {{-- @empty($referees)
                <th>Tabla vacía</th>
            @else
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Descripción</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endempty --}}
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            {{-- @forelse ($referees as $referee)
                @if ($referee->user)
                    <tr class="border-b border-stone-700 h-16">
                        <td>{{ $referee->user->id }}</td>
                        <td>{{ $referee->name }}</td>
                        <td>{{ $referee->lastname }}</td>
                        <td>{{ $referee->user->username }}</td>
                        <td>{{ $referee->birthdate }}</td>
                        <td>{{ $referee->birthplace }}</td>
                        <td></td>
                        <td>{{ $referee->user->phone }}</td>
                        <td>{{ $referee->user->email }}</td>
                        <td>{{ $referee->user->up_date }}</td>
                        <td>
                            <a href="{{ route('user.edit', $referee->id) }}"
                                class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $referee->user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                    Borrar
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('user.edit', $referee->id) }}"
                                class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse --}}
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Fecha de Nacimiento</td>
                <td>Lugar de nacimiento</td>
                <td>Nacionalidad</td>
                <td>Descripción</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <form action="#" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                            Borrar
                        </button>
                    </form>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
        @endslot
    @endcomponent

    @section('scripts')
        @component('_components.swal')
        @endcomponent
    @endsection
@endsection
