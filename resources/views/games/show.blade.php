@extends('layouts.admin_view')

@section('title')
{{$game->localTeam->name}} - {{$game->awayTeam->name}}
@endsection

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 pt-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full">
                @if ($game->tournament_id)
                <p class="text-3xl text-red-500 font-semibold pb-6">{{$game->tournament->name}}</p>
                @else
                <p class="text-3xl text-red-500 font-semibold pb-6">Partido Amistoso</p>  
                @endif
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row px-2">
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Fecha: {{$game->reservation->reserve_date}}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Lugar: {{$game->reservation->instalation->name}}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-lg text-stone-400">Árbitro: {{$game->referee->people->name}} {{$game->referee->people->lastname}}</p>
                    </div>
                </div>
                <hr class="h-px bg-stone-500 border-0">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex-1">
                        <p class="text-xl font-bold">Local</p>
                        <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo equipo local"
                            class="w-30 h-30 rounded-full mx-auto mb-4">
                        <a href="#" class="text-xl font-bold">{{$game->localTeam->name}}</a>
                    </div>
                    <div class="flex-1">
                        <p class="text-7xl font-bold pt-40">0 - 1</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-xl font-bold">Visitante</p>
                        <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo equipo visitante"
                            class="w-30 h-30 rounded-full mx-auto mb-4">
                        <a href="#" class="text-xl font-bold">{{$game->awayTeam->name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-stone-800 rounded-lg shadow-md  m-6 text-center">
        <h5 class="text-2xl text-red-500 font-semibold">Eventos</h5>
        <div class="px-72">
            <table class="table-fixed w-full text-sm rtl:text-right text-zinc-300">
                <tbody>
                    <tr class="h-16"  >
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
        </div>
    </div>
@endsection
