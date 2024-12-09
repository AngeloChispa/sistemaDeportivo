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
                @auth
                    @if (Auth::user()->rol_id === 1)
                        <th colspan="3">Acción</th>
                    @endif
                @endauth
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($referees as $referee)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{ $referee->id }}</td>
                    <td>{{ $referee->people->name }}</td>
                    <td>{{ $referee->people->lastname }}</td>
                    <td>{{ $referee->people->birthdate }}</td>
                    <td>{{ $referee->people->birthplace }}</td>
                    <td>{{ $referee->people->birthplace }}</td>
                    <td class="text-balance">{{ $referee->description }}</td>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <a href="#"
                                    class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                            </td>
                            <td>
                                <form action="#" method="POST" class="inline formulario-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="#"
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
