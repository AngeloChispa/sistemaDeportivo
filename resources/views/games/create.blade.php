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
                @slot('id', 'local_team_id required')
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
                @slot('id', 'away_team_id required')
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
                @slot('id', 'referee required')
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

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tournamentSelect = document.getElementById('tournament_id');
            const localTeamSelect = document.getElementById('local_team_id');
            const awayTeamSelect = document.getElementById('away_team_id');

            //Bloquear opciones
            function updateTeamSelection() {
                const localTeam = localTeamSelect.value;
                const awayTeam = awayTeamSelect.value;

                // bloquea opción a visitante
                for (let option of awayTeamSelect.options) {
                    if (option.value === localTeam && localTeam !== '') {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }

                // bloquea opción a local
                for (let option of localTeamSelect.options) {
                    if (option.value === awayTeam && awayTeam !== '') {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }
            }

            // Verifica cambios
            localTeamSelect.addEventListener('change', updateTeamSelection);
            awayTeamSelect.addEventListener('change', updateTeamSelection);
        });
    </script>
@endsection
