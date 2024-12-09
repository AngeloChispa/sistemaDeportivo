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
            @forelse ($people as $person)
            @if ($person->referee)
                <tr>
                <td>{{  $person->id  }}</td>
                <td>{{  $person->name  }}</td>
                <td>{{  $person->lastname  }}</td>
                <td>{{  $person->birthdate  }}</td>
                <td>{{  $person->birthplace  }}</td>
                <td>{{  $person->birthplace  }}</td>
                <td class="text-balance">{{  $person->referee->description  }}</td>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <a href="{{route("referees.edit", $person->referee->id)}}"
                                    class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                            </td>
                            <td>
                                <form action="{{route("referees.destroy",$person->referee->id)}}" method="POST" class="inline formulario-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{route("referees.show",$person->referee->id)}}"
                                    class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                            </td>
                        @endif
                    @endauth
                </tr>
            @endif
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
