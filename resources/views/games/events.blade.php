@extends('layouts.admin_view')

@section('title', 'Registrar evento en partido')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Evento
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxSelectInput')
                @slot('for', 'player_team')
                @slot('content', 'Jugador: ')
                @slot('name', 'player_team')
                @slot('id', 'player_team')
                @slot('more_options')
                    {{-- @forelse ($player_teams as $player_team)
                        <option value="{{ $player_team['id'] }}">{{ $player_team['name'] }}</option>
                    @empty
                        <option value="">No disponibles</option>                     
                    @endforelse --}}
                    <option value="1">Juanito</option>
                    <option value="2">Pepito</option>
                    <option value="3">Antonia</option>
                @endslot
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'event')
                @slot('content', 'Evento:')
                @slot('name', 'event')
                @slot('id', 'event required')
                @slot('more_options')
                    <option value="1">Gol</option>
                    <option value="2">Tarjeta roja</option>
                    <option value="3">Tarjeta amarilla</option>
                    <option value="4">Falta</option>
                    <option value="5">Asistencia</option>
                @endslot
            @endcomponent

            
            @component('_components.boxInputCreate')
                @slot('for', 'minute')
                @slot('content', 'Minuto: ')
                @slot('type', 'number')
                @slot('name', 'minute')
                @slot('id', 'minute required min="0"')
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
