@extends('layouts.admin_view')

@section('title', 'Jugadores en el equipo')

@section('content')
    {{-- Tabla de jugadores actuales dentro del equipo --}}
    @component('_components.tableClassifications')
        @slot('title')
            Jugadores
        @endslot

        @slot('content_head')
            {{-- @empty()
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Deporte</th>
                    <th>Escudo</th>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <th></th>
                        @endif
                    @endauth
                </tr>
            @endempty --}}
            <tr class="text-sm uppercase font-normal">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dorsal</th>
                <th>Capitán</th>
                <th>Fecha de entrada</th>
                <th>Eliminar</th>
            </tr>
        @endslot
        @slot('content_body')
            {{-- @forelse ()
                <tr class="border-b border-stone-700 h-16">
                    
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline formulario-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                                </form>
                            </td>
                        @endif
                    @endauth
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse --}}

            <tr>
                <td>Juan</td>
                <td>Castillo</td>
                <td>11</td>
                <td>X</td>
                <td>10-11-2012</td>
                <td>
                    <form action="#" method="POST" class="inline formulario-eliminar">
                        @csrf
                        <button type="submit"
                            class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                    </form>
                </td>
            </tr>
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection

@endsection
