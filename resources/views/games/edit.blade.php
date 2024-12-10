@extends('layouts.admin_view')

@section('title', 'Editar partido')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Partido
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('games.update', $game->id) }}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method('PUT')
            @csrf

            @component('_components.boxSelectInput')
                @slot('for', 'tournament')
                @slot('content', 'Torneo: ')
                @slot('name', 'tournament')
                @slot('id', 'tournament')
                @slot('more_options')
                    @foreach ($tournaments as $tournament)
                        <option value="{{ $tournament->id }}"
                            {{ old('tournament', $game->tournament_id) == $tournament->id ? 'selected' : '' }}>
                            {{ $tournament->name }}
                        </option>
                    @endforeach
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'local_team')
                @slot('content', 'Equipo local: ')
                @slot('name', 'local_team')
                @slot('id', 'local_team')
                @slot('more_options')
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('local_team', $game->local_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'away_team')
                @slot('content', 'Equipo visitante: ')
                @slot('name', 'away_team')
                @slot('id', 'away_team')
                @slot('more_options')
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('away_team', $game->away_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'referee')
                @slot('content', 'Árbitro: ')
                @slot('name', 'referee_id')
                @slot('id', 'referee')
                @slot('more_options')
                    @foreach ($referees as $referee)
                        <option value="{{ $referee->id }}"
                            {{ old('referee_id', $game->referee_id) == $referee->id ? 'selected' : '' }}>
                            {{ $referee->people->name }}
                        </option>
                    @endforeach
                @endslot
            @endcomponent

            <div class="flex">
                <input type="submit" value="Actualizar"
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
            const localTeamSelect = document.getElementById('local_team');
            const awayTeamSelect = document.getElementById('away_team');
            
            function updateTeamSelection() {
                const localTeam = localTeamSelect.value;
                const awayTeam = awayTeamSelect.value;

                // Bloquear a visitante
                for (let option of awayTeamSelect.options) {
                    if (option.value === localTeam && localTeam !== '') {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }

                // Bloquear a local
                for (let option of localTeamSelect.options) {
                    if (option.value === awayTeam && awayTeam !== '') {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                }
            }

            //Bloqueo al entrar
            updateTeamSelection();

            localTeamSelect.addEventListener('change', updateTeamSelection);
            awayTeamSelect.addEventListener('change', updateTeamSelection);
        });
    </script>
@endsection
