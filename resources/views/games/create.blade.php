@extends('layouts.admin_view')

@section('title', 'Registrar partido')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Partido
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('games.store') }}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxSelectInput')
                @slot('for', 'tournament')
                @slot('content', 'Torneo: ')
                @slot('name', 'tournament_id')
                @slot('id', 'tournament_id')
                @slot('more_options')
                    @forelse ($tournaments as $tournament)
                        <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'local_team')
                @slot('content', 'Equipo local: ')
                @slot('name', 'local_team_id')
                @slot('id', 'local_team_id')
                @slot('more_options')
                    @forelse ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'away_team')
                @slot('content', 'Equipo visitante: ')
                @slot('name', 'away_team_id')
                @slot('id', 'away_team_id')
                @slot('more_options')
                    @forelse ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
            @slot('for', 'referee')
            @slot('content', 'Árbitro: ')
            @slot('name', 'referee_id')
            @slot('id', 'referee')
            @slot('more_options')
                @forelse ($referees as $referee)
                    <option value="{{ $referee->id }}">{{ $referee->people->name }}</option>
                @empty
                    <option value="">No disponibles</option>
                @endforelse
            @endslot
        @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('games.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
