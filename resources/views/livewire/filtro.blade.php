@component('_components.table_export')
    @slot('title')
        Filtro
    @endslot
    @slot('p_content')
        <label for="birthplace" class="text-zinc-300">Lugar de Nacimiento:</label>
        <input type="text" id="birthplace" wire:model.defer="birthplace" class="p-1.5 bg-stone-300 text-black rounded">
        <button wire:click="search" class="p-1.5 text-zinc-300 bg-stone-600 rounded hover:bg-stone-800">Buscar</button>
    @endslot

    @slot('content_head')
        <tr>
            @empty($filteredPeople)
                <th>Tabla vacía</th>
            @else
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
            @endempty
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
            <tr class="border-b border-stone-700 h-16">
                <td>No data found</td>
            </tr>
        @endforelse
    @endslot
@endcomponent
