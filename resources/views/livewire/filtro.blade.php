<div class="p-6">

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
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>id jugador</th>
                    <th>Estado</th>
                    <th>Altura</th>
                    <th>Lado bueno</th>
                @endempty
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($filteredPeople as $person)
                @if ($person['player'])
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
                @endif
            @empty
                <tr class="border-b border-stone-700 h-16">
                    <td>No data found</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent
</div>
