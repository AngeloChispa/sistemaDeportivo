@extends('layouts.admin_view', ['headers' => []])

@section('title', 'Index')

@section('content')

    <div class="relative overflow-x-auto shadow-md m-6">
        <div class="flex justify-stretch">

            {{-- LEFT --}}
            <div class="mr-5 w-72 text-sm text-center rtl:text-right text-zinc-300">
                <div class="flex-col">

                    {{-- cl 1 --}}
                    <div
                        class=" text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900 rounded-lg mb-5 break-words">
                        <div class="pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                            <p class="mt-5 mb-3 text-bold">Mejores Ligas</p>
                        </div>
                        <hr class="border-zinc-800 ">

                        @forelse ($tournaments as $tournament)
                        <ul class="text-base">
                            <a href="{{ route('tournaments.show', $tournament->id) }}">
                                <li class="p-3 px-8 pt-4 hover:bg-[#333333] flex items-center">
                                    <span><img src="{{ asset('assets/img/ligamx2.png') }}" class="h-3 w-5"></span>
                                    <span class="w-4"></span>
                                    <span class="text-left">{{$tournament->name}}</span>
                                </li>
                            </a>
                        </ul>
                        @empty
                            <h1>No data found</h1>
                        @endforelse
                    </div>

                    {{-- cl 2 --}}
                    <div
                        class=" text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900 rounded-lg mb-5 break-words">
                        <div class="pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                            <div class="flex flex-col">
                                <div class="flex">
                                    <p class="mt-5 mb-3 text-bold">Todas las Ligas</p>
                                </div>
                            </div>
                        </div>
                        <hr class="border-zinc-800 ">

                        <a href="{{ route('user.index') }}">
                            <li class="p-3 px-8 hover:bg-[#333333] hover:rounded-b-lg flex items-center">
                                <span><img src="{{ asset('assets/img/bundesliga2.png') }}" class="h-3 w-5"></span>
                                <span class="w-4"></span>
                                Eso es todo..
                            </li>
                        </a>
                    </div>

                </div>
            </div>

            {{-- CENTER --}}
            <div class="mr-5 w-1/2 text-base text-left rtl:text-right text-zinc-300">
                <div class="flex-col">

                    
                    {{-- cc 2 --}}

                    @forelse ($tournaments as $tournament)
                        <div class="mb-5 rounded-lg bg-stone-900"> <!-- Contenedor principal -->
                            <div class="pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                                <p class="mt-2 mb-1 text-bold">{{ $tournament->name }}</p>
                            </div>

                            @foreach ($tournament->games as $game)
                                <hr class="border-zinc-800 ">

                                <a href="{{ route('games.show', $game->id) }}"
                                    class="p-5 text-base font-semibold text-center text-zinc-300 bg-stone-900 flex justify-between items-center hover:bg-[#333333]">
                                    <span class="flex-1 text-right flex items-center justify-end">
                                        {{ $game->localTeam->name }}
                                        <img src="{{ asset('assets/img/realmadrid.png') }}" class="h-6 w-6 ml-2"
                                            alt="Real Madrid">
                                    </span>
                                    <span class="w-20 text-center"> - </span>
                                    <span class="flex-1 text-left flex items-center">
                                        <img src="{{ asset('assets/img/barca.png') }}" class="h-6 w-6 mr-2"
                                            alt="Barcelona">
                                        {{ $game->awayTeam->name }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    @empty
                        <h1>No data found</h1>
                    @endforelse

                    @foreach ($games as $game)
                        @if (!$game->tournament)
                            <div class="mb-5 rounded-lg bg-stone-900"> <!-- Contenedor principal -->
                                <div class="pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                                    <p class="mt-2 mb-1 text-bold">Partidos Amistosos</p>
                                </div>

                                <hr class="border-zinc-800 ">

                                <a href="{{ route('games.show', $game->id) }}"
                                    class="p-5 text-base font-semibold text-center text-zinc-300 bg-stone-900 flex justify-between items-center hover:bg-[#333333]">
                                    <span class="flex-1 text-right flex items-center justify-end">
                                        {{$game->localTeam->name}}
                                        <img src="{{ asset('assets/img/realmadrid.png') }}" class="h-6 w-6 ml-2"
                                            alt="Real Madrid">
                                    </span>
                                    <span class="w-20 text-center">0 - 0</span>
                                    <span class="flex-1 text-left flex items-center">
                                        <img src="{{ asset('assets/img/barca.png') }}" class="h-6 w-6 mr-2"
                                            alt="Barcelona">
                                        {{$game->awayTeam->name}}
                                    </span>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="w-1/4 text-lg text-left rtl:text-right text-zinc-300">

                {{-- cr 1 --}}
                <div
                    class=" text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900 rounded-lg mb-5 break-words">

                    <div class="pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                        <p class="mt-5 mb-3 text-bold">Jugadores</p>
                    </div>

                    <hr class="border-zinc-800 ">
                    <ul class="text-base">
                        @forelse ($players as $player)
                        <a href="{{ route('players.show', $player->people->id) }}">
                            <li class="p-3 px-8 pt-4 hover:bg-[#333333] flex items-center">
                                <span><img src="{{ asset('assets/img/ligamx2.png') }}" class="h-3 w-5"></span>
                                <span class="w-4"></span>
                                <span class="text-left">{{$player->people->name}}</span>
                            </li>
                        </a>
                        @empty
                            <h1>No data found</h1>
                        @endforelse
                    </ul>
                </div>


                {{-- cr 2 --}}
                <div
                    class="text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900 rounded-lg mb-5 break-words">
                    <div class="flex flex-col pl-5 bg-stone-800 p-1 rounded-t-lg font-semibold">
                        <div class="flex items-center mb-1">

                            <div class="mb-3">
                                <p class="mt-5 text-bold">Premier League</p>
                                <p class="text-base text-zinc-400">Inglaterra</p>
                            </div>

                            <div
                                class="ml-[105px] flex items-center justify-center w-16 h-16 rounded-full border border-stone-600">
                                <img src="{{ asset('assets/img/premierleague2.png') }}" class="w-10 h-10">
                            </div>
                        </div>
                    </div>

                    <hr class="border-zinc-800">

                    @component('_components.tableClassificationsIndex')
                        {{-- @slot('p_content')
                        Tabla que muestra los usuarios registrados hasta el momento.
                    @endslot 
                    @slot('reference', 'user.create')
                    @slot('create_something', 'Registrar Usuario') --}}

                        @slot('content_head')
                            {{-- @empty($people)
                            <th>Tabla vacía</th>
                        @else --}}
                            <tr>
                                <th colspan="2" class="text-left pl-5 w-2/5">Equipo</th>
                                <th></th>
                                <th class="w-1/5">J</th>
                                <th class="w-1/5">DG</th>
                                <th class="w-1/5 font-bold">Pts</th>
                            </tr>
                            {{-- @endempty --}}
                        @endslot
                        @slot('content_body')
                            {{-- @forelse ($people as $person)
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
                                        <a href="{{ route('user.edit', $person->id) }}"
                                            class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td>No data found</td>
                            </tr>
                        @endforelse --}}
                            <tr class="border-b border-stone-800 h-12 hover:bg-[#333333] text-base">
                                <td style="width: 50px;" class="hover:bg-transparent">1</td>
                                <td><img src="{{ asset('assets/img/liverpool.png') }}" class="h-3 w-5"></td>
                                <td class="text-left hover:bg-transparent">Liverpool</td>
                                <td class="">12</td>
                                <td class="">12</td>
                                <td class=" font-black">31</td>
                            </tr>

                            <tr class="border-b border-stone-800 h-12 hover:bg-[#333333] text-base">
                                <td style="width: 50px;" class="">2</td>
                                <td><img src="{{ asset('assets/img/arsenal.png') }}" class="h-3 w-5"></td>
                                <td class="text-left">Arsenal</td>
                                <td class="">50</td>
                                <td class="">50</td>
                                <td class=" font-bold">62</td>
                            </tr>

                            <tr class="border-b border-stone-800 h-12 hover:bg-[#333333] text-base">
                                <td style="width: 50px;" class="">3</td>
                                <td><img src="{{ asset('assets/img/chelsea.png') }}" class="h-3 w-5"></td>
                                <td class="text-left">Chelsea</td>
                                <td class="">25</td>
                                <td class="">25</td>
                                <td class="font-bold">67</td>
                            </tr>
                        @endslot
                    @endcomponent
                </div>

            </div>
        </div>
    </div>

@endsection
