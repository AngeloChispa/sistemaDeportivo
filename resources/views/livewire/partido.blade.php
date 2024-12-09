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
    <div class="px-10">
        <div class="bg-stone-800 rounded-lg shadow-md m-2 text-center">
            <h5 class="text-2xl text-red-500 font-semibold">Eventos</h5>
            <div class="px-72">
                <table class="table-fixed w-full text-sm rtl:text-right text-zinc-300">
                    <tbody>
                        {{-- Caso de gol (1) --}}
                        <tr class="h-16">
                            <td>Evento</td>
                            <td></td>
                            <td>Hora</td>
                            <td><img class="h-7 w-7 rounded" src="{{ asset('assets/img/soccer_ball.png') }}"
                                alt="tarjeta roja"></td>
                            <td>Jugador</td>
                        </tr>
                        {{-- Caso de tarjeta roja (2) --}}
                        <tr class="h-16">
                            <td>Evento</td>
                            <td></td>
                            <td>Hora</td>
                            <td><img class="h-7 w-5 rounded" src="{{ asset('assets/img/red_card.png') }}"
                                    alt="tarjeta roja"></td>
                            <td>Jugador</td>
                        </tr>
                        {{-- Caso de tarjeta amarilla (3) --}}
                        <tr class="h-16">
                            <td>Evento</td>
                            <td class="grid place-content-end"><img class="h-7 w-5 rounded grid"
                                    src="{{ asset('assets/img/yellow_card.jpg') }}" alt="tarjeta amarilla"></td>
                            <td>Hora</td>
                            <td></td>
                            <td>Jugador</td>
                        </tr>
                        {{-- Caso de falta (4) --}}
                        <tr class="h-16">
                            <td>Evento</td>
                            <td class="grid place-content-end"><img class="h-7 w-7 rounded grid"
                                    src="{{ asset('assets/img/whistle.png') }}" alt="falta"></td>
                            <td>Hora</td>
                            <td></td>
                            <td>Jugador</td>
                        </tr>
                        {{-- Caso de asistencia (5) --}}
                        <tr class="h-16">
                            <td>Evento</td>
                            <td></td>
                            <td>Hora</td>
                            <td><img class="h-7 w-5 rounded" src="{{ asset('assets/img/assist.png') }}"
                                    alt="asistencia"></td>
                            <td>Jugador</td>
                        </tr>
                        <tr>
                            <td colspan="5">
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
