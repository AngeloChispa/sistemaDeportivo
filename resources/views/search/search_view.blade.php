@extends('layouts.admin_view')

@section('title')
    {{$searchTerm}}
@endSection

@section('content')
    <div class="text-zinc-200 p-5">
        <div class="pb-5">
            <h1 class="text-2xl font-semibold">{{$searchTerm}}</h1>
            <p>Resultados encontrados para la búsqueda de {{$searchTerm}}</p>
            <hr class="h-px bg-stone-500 border-0">
        </div>

        @if ($tournaments->isNotEmpty())
            <div>
                <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Torneos</h2>
                @component('_components.tableClassificationsIndex')
                    @slot('content_head')
                        <tr class="text-sm font-normal">
                            <th>id</th>
                            <th class="w-1/6">nombre</th>
                            <th>tipo</th>
                            <th>descripción</th>
                            <th class="w-1/6">Fecha de inicio</th>
                            <th class="w-1/6">Fecha de finalización</th>
                        </tr>
                    @endslot
                    @slot('content_body')
                        @foreach ($tournaments as $tournament)
                            <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                <td>{{ $tournament->id }}</td>
                                <td class="flex justify-center">
                                    <a href="{{ route('tournaments.show', $tournament->id) }}">
                                        <div class="flex place-items-center">
                                            <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                                alt="Escudo del torneo {{ $tournament->name }}">
                                            <p class="px-2">{{ $tournament->name }}</p>
                                        </div>
                                    </a>
                                </td>
                                <td>{{ $tournament->type }}</td>
                                <td>{{ $tournament->description }}</td>
                                <td>{{ $tournament->start_date }}</td>
                                <td>{{ $tournament->end_date }}</td>
                            </tr>
                        @endforeach
                    @endslot
                @endComponent
            </div>
        @endif

        @if ($teams->isNotEmpty())
            <div>
                <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Equipos</h2>
                @component('_components.tableClassificationsIndex')
                    @slot('content_head')
                        <tr class="text-sm font-normal">
                            <th>id</th>
                            <th class="w-1/6">nombre</th>
                            <th>Deporte</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                        </tr>
                    @endslot
                    @slot('content_body')
                        @foreach ($teams as $team)
                            <!-- Recorremos los equipos -->
                            <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                <td>{{ $team->id }}</td> <!-- Muestra el ID del equipo -->
                                <td class="flex justify-center">
                                    <a href="{{ route('teams.show', $team->id) }}">
                                        <div class="flex place-items-center">
                                            <!-- Imagen y nombre del equipo -->
                                            <img class="w-12 h-12"
                                                src="{{ asset('assets/img/' . strtolower($team->name) . '.png') }}"
                                                alt="Escudo del equipo {{ $team->name }}">
                                            <p class="px-2">{{ $team->name }}</p>
                                        </div>
                                    </a>
                                </td>
                                <td>{{ $team->sport->name }}</td> <!-- Deporte del equipo -->
                                <td>{{ $team->city }}</td> <!-- Ciudad del equipo -->
                                <td>{{ $team->state }}</td> <!-- Estado del equipo -->
                            </tr>
                        @endforeach
                    @endslot
                @endComponent
            </div>
        @endif

        @if ($people->isNotEmpty())
            @if ($people->where('player', '!=', null)->isNotEmpty())
                <div>
                    <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Jugadores</h2>
                    @component('_components.tableClassificationsIndex')
                        @slot('content_head')
                            <tr class="text-sm font-normal">
                                <th>id</th>
                                <th class="w-1/6">nombre</th>
                                <th>Lugar de nacimiento</th>
                                <th>Nacionalidad</th>
                                <th>Fecha de nacimiento</th>
                                <th>Altura</th>
                            </tr>
                        @endslot
                        @slot('content_body')
                            @forelse ($people as $person)
                                @if ($person->player)
                                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                        <td>{{ $person->player->id }}</td>
                                        <td class="flex justify-center">
                                            <a href="{{ route('players.show', $person->player->id) }}">
                                                <div class="flex place-items-center">
                                                    <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                                        alt="Foto de perfil de InserteNombre">
                                                    <p class="px-2">{{ $person->name }}</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td>{{ $person->birthplace }}</td>
                                        <td>{{ $person->birthplace }}</td>
                                        <td>{{ $person->birthdate }}</td>
                                        <td>{{ $person->player->height }}</td>
                                    </tr>
                                @endif
                            @empty
                            @endforelse
                        @endslot
                    @endComponent
                </div>
            @endif
        @endif

        @if ($people->isNotEmpty())
            @if ($people->where('trainers', '!=', null)->isNotEmpty())
                <div>
                    <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Entrenadores</h2>
                    @component('_components.tableClassificationsIndex')
                        @slot('content_head')
                            <tr class="text-sm font-normal">
                                <th>id</th>
                                <th class="w-1/6">nombre</th>
                                <th>Lugar de nacimiento</th>
                                <th>Nacionalidad</th>
                                <th>Fecha de nacimiento</th>
                                <th>descripción</th>
                            </tr>
                        @endslot
                        @slot('content_body')
                            @foreach ($people->whereNotNull('trainers') as $person)
                                <!-- Recorre solo las personas que tienen un entrenador -->
                                <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                    <td>{{ $person->trainers->id }}</td> <!-- ID de la persona -->
                                    <td class="flex justify-center">
                                        <a href="{{ route('trainer.show', $tournament->trainers->id) }}">
                                            <div class="flex place-items-center">
                                                <!-- Foto de perfil de la persona -->
                                                <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                                    alt="Foto de perfil de {{ $person->name }}">
                                                <p class="px-2">{{ $person->name }}</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $person->birthplace }}</td> <!-- Lugar de nacimiento -->
                                    <td>{{ $person->nationality }}</td> <!-- Nacionalidad -->
                                    <td>{{ $person->birthdate }}</td> <!-- Fecha de nacimiento -->
                                    <td>{{ $person->trainers->description }}</td> <!-- Descripción del entrenador -->
                                </tr>
                            @endforeach
                        @endslot
                    @endComponent
                </div>
            @endif
        @endif

        @if ($people->isNotEmpty())
            @if ($people->where('referees', '!=', null)->isNotEmpty())
                <div>
                    <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Árbitros</h2>
                    @component('_components.tableClassificationsIndex')
                        @slot('content_head')
                            <tr class="text-sm font-normal">
                                <th>id</th>
                                <th class="w-1/6">nombre</th>
                                <th>Lugar de nacimiento</th>
                                <th>Nacionalidad</th>
                                <th>Fecha de nacimiento</th>
                                <th>Descripción</th>
                            </tr>
                        @endslot
                        @slot('content_body')
                            @foreach ($people->whereNotNull('referees') as $person)
                                <!-- Recorre solo las personas que tienen árbitros -->
                                <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                    <td>{{ $person->referees->id }}</td> <!-- ID de la persona -->
                                    <td class="flex justify-center">
                                        <a href="{{ route('referees.show', $tournament->referees->id) }}">
                                            <div class="flex place-items-center">
                                                <!-- Foto de perfil de la persona -->
                                                <img class="w-12 h-12" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                                    alt="Foto de perfil de {{ $person->name }}">
                                                <p class="px-2">{{ $person->name }}</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $person->birthplace }}</td> <!-- Lugar de nacimiento -->
                                    <td>{{ $person->nationality }}</td> <!-- Nacionalidad -->
                                    <td>{{ $person->birthdate }}</td> <!-- Fecha de nacimiento -->
                                    <td>{{ $person->referees->description }}</td> <!-- Descripción del árbitro -->
                                </tr>
                            @endforeach
                        @endslot
                    @endComponent
                </div>
            @endif
        @endif

        @if ($instalations->isNotEmpty())
            <div>
                <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Instalaciones</h2>
                @component('_components.tableClassificationsIndex')
                    @slot('content_head')
                        <tr class="text-sm font-normal">
                            <th>id</th>
                            <th>nombre</th>
                            <th>País</th>
                            <th>Estado</th>
                            <th>Ciudad</th>
                            <th class="w-1/6">Capacidad</th>
                        </tr>
                    @endslot
                    @slot('content_body')
                        @foreach ($instalations as $instalation)
                            <!-- Recorre cada instalación -->
                            <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                <td>{{ $instalation->id }}</td> <!-- ID de la instalación -->
                                <td>
                                    <a href="{{ route('instalations.show', $instalation->id) }}">
                                        {{ $instalation->name }} <!-- Nombre de la instalación -->
                                    </a>
                                </td>
                                <td>{{ $instalation->country }}</td> <!-- País de la instalación -->
                                <td>{{ $instalation->state }}</td> <!-- Estado de la instalación -->
                                <td>{{ $instalation->city }}</td> <!-- Ciudad de la instalación -->
                                <td>{{ $instalation->capacity }}</td> <!-- Capacidad de la instalación -->
                            </tr>
                        @endforeach
                    @endslot
                @endComponent
            </div>
        @endif

        @auth
            @if (Auth::user()->rol_id === 1)
                @if ($sponsors->isNotEmpty())
                    <div>
                        <h2 class="bg-red-500 py-0.5 rounded text-lg font-medium">Patrocinadores</h2>
                        @component('_components.tableClassificationsIndex')
                            @slot('content_head')
                                <tr class="text-sm font-normal">
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Localización</th>
                                    <th class="w-1/6">Tipo de patrocinio</th>
                                </tr>
                            @endslot
                            @slot('content_body')
                                @foreach ($sponsors as $sponsor)
                                    <!-- Recorre cada patrocinador -->
                                    <tr class="border-b border-stone-700 h-9 hover:bg-stone-800">
                                        <td>{{ $sponsor->id }}</td> <!-- ID del patrocinador -->
                                        <td>
                                            <a href="{{ route('sponsors.show', $sponsor->id) }}">
                                                {{ $sponsor->name }} <!-- Nombre del patrocinador -->
                                            </a>
                                        </td>
                                        <td>{{ $sponsor->phone }}</td> <!-- Teléfono del patrocinador -->
                                        <td>{{ $sponsor->email }}</td> <!-- Correo del patrocinador -->
                                        <td>{{ $sponsor->location }}</td> <!-- Localización del patrocinador -->
                                        <td>{{ $sponsor->sponsorship_type }}</td> <!-- Tipo de patrocinio -->
                                    </tr>
                                @endforeach
                            @endslot
                        @endComponent
                    </div>
                @endif
            @endif
        @endauth
    </div>
@endSection
