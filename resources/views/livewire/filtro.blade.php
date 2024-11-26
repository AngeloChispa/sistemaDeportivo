<div>
    <table>
        <tr>
            <td>
                <label for="birthplace">Lugar de Nacimiento:</label>
                <input type="text" id="birthplace" wire:model.defer="birthplace">
            </td>
            <td>
                <button wire:click="search">Buscar</button>
            </td>
        </tr>
    </table>
    <table>
        @forelse ($filteredPeople as $person)
            <tr>
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
    </table>
</div>
