@extends('layouts.admin_view')

@section('title')
    {{ $team->name }}
@endsection

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset($team->shield) }}" alt="Escudo {{ $team->name }}" class="w-40 h-40 rounded-full mx-auto mb-4">
                <p class="name text-xl text-red-500 font-bold uppercase mb-2">{{ $team->name }}</p>
                <p class="text-sm">{{ $team->state }}, {{ $team->city }}</p>
                <div class="p-4">
                    @auth
                        <form action="#" method="POST" class="w-full">
                            @csrf

                            <div class="grid place-content-center">
                                <button type="submit"
                                    class="font-medium flex text-zinc-200 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">
                                    <ion-icon class="pt-0.5 h-5 w-5" name="heart-circle-outline"></ion-icon>
                                    Añadir a favoritos
                                </button>
                            </div>
                        </form>
                    @endauth
                </div>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información general del equipo</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Nombre: </strong>{{ $team->name }}</li>
                        <li><strong>Estado: </strong>{{ $team->state }}</li>
                        <li><strong>Ciudad: </strong>{{ $team->city }}</li>
                        <hr class="h-px my-8 bg-stone-500 border-0">
                        <li><strong>Deporte: </strong>{{ $team->sport->name }}</li>
                        <li><strong>Jugadores en plantilla: </strong>10</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Títulos</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="titulo">
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="titulo">
                        </a>
                    </div>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Patrocinadores</h5>
                    <div class="flex overflow-x-auto space-x-1">
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">nombre</p>
                        </a>
                        <a class="flex-shrink-0" href="#">
                            <img class="flex-shrink-0 w-32 h-32" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                alt="patrocinios">
                            <p class="text-center">nombre</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6 gap-6">
        @component('_components.table_export')
            @slot('title')
                Jugadores
            @endslot
            @slot('p_content')
                Jugadores del equipo.
            @endslot
            @slot('content_head')
                <tr>
                    @empty($team->players)
                        <th>No data</th>
                    @else
                        <th>Dorsal</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Estado</th>
                        <th>Posición</th>
                        <th>Fecha de integración</th>
                    @endempty
                </tr>
            @endslot
            @slot('content_body')
                @forelse ($team->players as $player)
                    <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                        <td>{{ $player->pivot->dorsal }}</td>
                        <td>{{ $player->people->name }}</td>
                        <td>{{ $player->people->lastname }}</td>
                        <td>{{ $player->status }}</td>
                        <td>{{ $player->pivot->position }}</td>
                        <td>{{ $player->pivot->assignment_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No data found</td>
                    </tr>
                @endforelse
            @endslot
        @endcomponent
    </div>
@endsection
