@extends('layouts.admin_view')

@section('title', 'Teams')

@section('content')
    @component('_components.table_export')
        @slot('title')
            Filtro
        @endslot
        @slot('p_content')
        <tr>
            <td>
                <label for="birthplace">Lugar de Nacimiento:</label>
                <input type="text" id="birthplace" wire:model.defer="birthplace">
            </td>
            <td>
                <button wire:click="search">Buscar</button>
            </td>
        </tr>
        @endslot

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Deporte</th>
                <th>Escudo</th>
                <th>Torneos ganados</th>
                <th>Torneos jugados</th>
                <th>Partidos ganados</th>
                <th>Partidos jugados</th>
                <th>Puntos</th>
                <th>Fecha de registro</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($filteredPeople as $person)
                <tr class="border-b border-stone-700 h-16">
                    <td>
                        {{ $person['id'] }}
                    </td>
                    <td>
                        {{ $person['name'] }}
                    </td>
                    <td>
                        {{ $person['lastname'] }}
                    </td>
                    <td>
                        {{ $person['birthdate'] }}
                    </td>
                    <td>
                        {{ $person['birthplace'] }}
                    </td>
                    <td>
                        {{ $person['player']['id'] }}
                    </td>
                    <td>
                        {{ $person['player']['status'] }}
                    </td>
                    <td>
                        {{ $person['player']['height'] }}
                    </td>
                    <td>
                        {{ $person['player']['bestSide'] }}
                    </td>
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent
@endsection
