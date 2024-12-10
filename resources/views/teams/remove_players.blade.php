@extends('layouts.admin_view')

@section('title', 'Jugadores en el equipo')

@section('content')
    {{-- Tabla de jugadores actuales dentro del equipo --}}
    @component('_components.tableClassifications')
        @slot('title')
            Jugadores
        @endslot

        @slot('content_head')
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
            @forelse ($players as $player)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $player->people->name }}</td>
                    <td>{{ $player->people->lastname }}</td>
                    <td>{{ $player->pivot->dorsal }}</td>
                    <td>{{ $player->pivot->captain ? 'Sí' : 'No' }}</td>
                    <td>{{ $player->pivot->assignment_date }}</td>
                    <td>
                        <form action="{{ route('teams.destroyPlayer', [$team->id, $player->id]) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay jugadores asignados al equipo.</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection

@endsection
