<div>
    <div class="flex flex-1 p-8">
        <div class="container flex flex-col lg:flex-row w-full px-6 pt-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full">
                @if ($game['tournament_id'])
                    <p class="text-3xl text-red-500 font-semibold pb-6">{{ $game['tournament']['name'] }}</p>
                @else
                    <p class="text-3xl text-red-500 font-semibold pb-6">Partido Amistoso</p>
                @endif
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row px-2">
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Fecha: {{ $game['reservation']['reserve_date'] }}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Lugar: <a
                                href="{{ route('instalations.show', $game['reservation']['instalation']['id']) }}">
                                {{ $game['reservation']['instalation']['name'] }}</a></p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Árbitro: <a
                                href="{{ route('referees.show', $game['referee']['id']) }}">
                                {{ $game['referee']['people']['name'] }}
                                {{ $game['referee']['people']['lastname'] }}</a></p>
                    </div>
                </div>
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex-1">
                        <p class="text-xl font-bold">Local</p>

                        <a href="{{ route('teams.show', $game['local_team']['id']) }}" class="text-xl font-bold">
                            <img src="{{ asset($game['local_team']['shield']) }}" alt="Escudo equipo local"
                                class="w-40 h-40 rounded-full mx-auto mb-4">
                            {{ $game['local_team']['name'] }}
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="text-7xl font-bold">{{ $localTeamGoals }} - {{ $awayTeamGoals }}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-xl font-bold">Visitante</p>
                        <a href="{{ route('teams.show', $game['away_team']['id']) }}" class="text-xl font-bold">
                            <img src="{{ asset($game['away_team']['shield']) }}" alt="Escudo equipo visitante"
                                class="w-40 h-40 rounded-full mx-auto mb-4">
                            {{ $game['away_team']['name'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10">
        <div class="bg-stone-800 rounded-lg shadow-md m-2 text-center">
            <h5 class="text-2xl text-red-500 font-semibold">Eventos</h5>
            <div class="px-72">
                <table class="table-fixed w-full text-sm rtl:text-right text-zinc-300">
                    <tbody>
                        @forelse ($events as $event)
                            <tr class="h-16">
                                <td><img class="h-7 w-7 rounded" src="{{ asset($event['image']) }}"
                                        alt="tarjeta roja"></td>
                                <td>{{$event['time']}}</td>
                                <td>{{$event['name']}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="p-4">No hay eventos</td>
                            </tr>
                        @endforelse
                        
                        <tr>
                            <td colspan="3">
                                <a href="#"
                                    class="text-sm font-medium text-zinc-200 bg-rose-500 sm:rounded-lg p-2 hover:bg-red-700">+
                                    Agregar un evento</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
