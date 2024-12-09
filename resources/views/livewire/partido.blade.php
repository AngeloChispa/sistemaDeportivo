<div>
    <div class="flex flex-1 p-8">
        <div class="container flex flex-col lg:flex-row w-full px-6 pt-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full">
                 @if ($game['tournament_id'])
                    <p class="text-3xl text-red-500 font-semibold pb-6">{{$game['tournament']['name']}}</p>
                @else 
                    <p class="text-3xl text-red-500 font-semibold pb-6">Partido Amistoso</p>
                @endif
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row px-2">
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Fecha: {{$game['reservation']['reserve_date']}}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Lugar: <a href="#">
                                {{$game['reservation']['instalation']['name']}}</a></p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Árbitro: <a href="#"> {{$game['referee']['people']['name']}} {{$game['referee']['people']['lastname']}}</a></p>
                    </div>
                </div>
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex-1">
                        <p class="text-xl font-bold">Local</p>

                        <a href="#" class="text-xl font-bold">
                            <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo equipo local"
                                class="w-30 h-30 rounded-full mx-auto mb-4">
                            {{$game['local_team']['name']}}
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="text-7xl font-bold pt-40">{{$localTeamGoals}} - {{$awayTeamGoals}}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-xl font-bold">Visitante</p>
                        <a href="#" class="text-xl font-bold">
                            <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo equipo visitante"
                                class="w-30 h-30 rounded-full mx-auto mb-4">
                            {{$game['away_team']['name']}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-stone-800 rounded-lg shadow-md m-6 text-center">
        <h5 class="text-2xl text-red-500 font-semibold">Eventos</h5>
        <div class="px-72">
            <table class="table-fixed w-full text-sm rtl:text-right text-zinc-300">
                <tbody>
                    <tr class="h-16">
                        <td>Evento</td>
                        <td>Hora</td>
                        <td>Jugador</td>
                    </tr>
                    <tr class="h-16">
                        <td>Evento</td>
                        <td>Hora</td>
                        <td>Jugador</td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="text-sm font-medium text-zinc-200 bg-rose-500 sm:rounded-lg p-2 hover:bg-red-700">+
                Agregar un evento</a>
        </div>
    </div>
</div>
