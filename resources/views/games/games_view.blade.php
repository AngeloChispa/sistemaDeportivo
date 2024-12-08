@extends('layouts.admin_view')

@section('title', 'Games table')

@section('content')
    @component('_components.table')
        @slot('title')
            Partidos
        @endslot
        @slot('p_content')
            Tabla que muestra los partidos registrados hasta el momento.
        @endslot
        @slot('reference', 'games.create')
        @slot('create_something', 'Registrar Partido')

        @slot('content_head')
            {{-- <tr>
            @empty($games)
                
            <th>No data</th>
            @else
            <th>ID Partido</th>
            <th>ID Torneo</th>
            <th>ID Equipo Local</th>
            <th>ID Equipo Visitante</th>
            <th>ID Arbitro</th>
            <th colspan="3">Acción</th>
            @endempty 
            </tr> --}}
            <tr>
                <th>ID Partido</th>
                <th>Torneo</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                <th>Arbitro</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            {{-- @forelse ($games as $game)
                @if ($person->user)
                    <tr class="border-b border-stone-700 h-16">
                        <td>{{ $person->user->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->user->username }}</td>
                        <td>{{ $person->birthdate }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td></td>
                        <td>{{ $person->user->phone }}</td>
                        <td>{{ $person->user->email }}</td>
                        <td>{{ $person->user->up_date }}</td>
                        <td>
                            <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $person->user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                    Borrar
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('user.edit', $person->id) }}"
                                class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse --}}
            @forelse ($games as $game)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $game->id }}</td>
                    <td>
                        @if ($game->tournament)
                            {{ $game->tournament->name }}
                        @else
                            Partido Amistoso
                        @endif
                    </td>
                    <td>{{ $game->localTeam->name }}</td>
                    <td>{{ $game->awayTeam->name }}</td>
                    <td>{{ $game->referee->people->name }} {{ $game->referee->people->lastname }}</td>
                    <td>
                        <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                </tr>
            @empty
            @endforelse
        @endslot
    @endcomponent
    
    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
