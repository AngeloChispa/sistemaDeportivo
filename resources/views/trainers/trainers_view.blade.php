@extends('layouts.admin_view')

@section('title', 'Entrenadores')

@section('content')
    @component('_components.table')
        @slot('title')
            Entrenadores
        @endslot
        @slot('p_content')
            Tabla que muestra los entrenadores registrados hasta el momento.
        @endslot
        @slot('reference', 'trainers.create')
        @slot('create_something', 'Registrar Entrenador')

        @slot('content_head')
            {{-- @empty($trainers)
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
                @auth
                    @if (Auth::user()->rol_id === 1)
                        <th colspan="3">Acción</th>
                    @endif
                @endauth
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($trainers as $trainer)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{ $trainer->id }}</td>
                    <td>{{ $trainer->people->name }}</td>
                    <td>{{ $trainer->people->lastname }}</td>
                    <td>{{ $trainer->people->birthdate }}</td>
                    <td>{{ $trainer->people->birthplace }}</td>
                    <td>{{ $trainer->people->birthplace }}</td>
                    <td>{{ $trainer->description }}</td>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <a href="{{ route('trainers.edit', $trainer->id) }}"
                                    class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('trainers.show', $trainer->id) }}"
                                    class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                            </td>
                        @endif
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
