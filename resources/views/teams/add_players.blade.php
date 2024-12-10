@extends('layouts.admin_view')

@section('title', 'Añadir Jugadores')

@section('content')
    <h1 class="text-4xl text-center">
        Añadir Jugadores
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            <div id="inputs-container">
                <div class="input-wrapper flex justify-between">
                    @component('_components.boxSelectInput')
                        @slot('for')
                            player-1
                        @endslot
                        @slot('content')
                            Jugador 1:
                        @endslot
                        @slot('name', 'players[]')
                        @slot('id')
                            player-1
                            required
                            class="player-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                        @endslot
                        @slot('more_options')
                            <option value="1">jugador 1</option>
                            <option value="2">jugador 2</option>
                            <option value="3">jugador 3</option>
                            <option value="4">jugador 4</option>
                        @endslot
                    @endcomponent

                    <div class="w-1/6">
                        @component('_components.boxInputCreate')
                        @slot('for', 'dorsal')
                        @slot('content', 'Dorsal: ')
                        @slot('name', 'dorsal')
                        @slot('id', 'dorsal min=1 required')
                        @slot('type', 'number')
                    @endcomponent
                    </div>

                    <label for="captain" class="self-center">Es capitán: </label>
                    <input type="radio" name="captain" id="captain">
                </div>
            </div>

            <div class="flex justify-center">
                <button type="button" id="add-input"
                    class="m-2 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition cursor-pointer">
                    +
                </button>
                <button type="button" id="remove-input"
                    class="m-2 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">
                    -
                </button>
            </div>

            <div class="flex">
                <button type="submit"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer">
                    Agregar jugadoress
                </button>
                <a href="{{ route('tournaments.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>

    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const inputsContainer = document.getElementById('inputs-container');
                const addInputButton = document.getElementById('add-input');
                const removeInputButton = document.getElementById('remove-input');
                let inputCount = 1;

                const updateSelectOptions = () => {
                    const selects = document.querySelectorAll('.player-select');

                    //Tiene todos los select
                    const selectedValues = Array.from(selects)
                        .map(select => select.value)
                        .filter(value => value !== "");

                    selects.forEach(select => {
                        const options = select.querySelectorAll('option');

                        options.forEach(option => {
                            option.disabled = false;
                            if (selectedValues.includes(option.value) && select.value !== option
                                .value) {
                                option.disabled = true;
                            }
                        });
                    });
                };

                //Nuevo select
                const addNewInput = () => {
                    inputCount++;

                    const newInput = document.createElement('div');
                    newInput.classList.add('input-wrapper');
                    newInput.innerHTML = `
                <div class="flex justify-between">
                @component('_components.boxSelectInput')
                    @slot('for')
                        player-${inputCount}
                    @endslot
                    @slot('content')
                        Jugador ${inputCount}:
                    @endslot
                    @slot('name', 'players[]')
                    @slot('id')
                        player-${inputCount}
                        class="player-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                    @endslot
                    @slot('more_options')
                        <option value="1">jugador 1</option>
                        <option value="2">jugador 2</option>
                        <option value="3">jugador 3</option>
                        <option value="4">jugador 4</option>
                    @endslot
                    @endcomponent
                    
                    <div class="w-1/6">
                        @component('_components.boxInputCreate')
                        @slot('for', 'dorsal')
                        @slot('content', 'Dorsal: ')
                        @slot('name', 'dorsal')
                        @slot('id', 'dorsal min=1')
                        @slot('type', 'number')
                    @endcomponent
                    </div>

                    <label for="captain" class="self-center">Es capitán: </label>
                    <input type="radio" name="captain" id="captain">
                </div>
            `;

                    inputsContainer.appendChild(newInput);
                    updateSelectOptions();
                };

                //ELiminar selects
                const removeLastInput = () => {
                    const inputs = inputsContainer.querySelectorAll('.input-wrapper');
                    if (inputs.length > 1) {
                        const lastInput = inputs[inputs.length - 1];
                        inputsContainer.removeChild(lastInput);
                        updateSelectOptions();
                        inputCount--;
                    } else {
                        alert('No se puede eliminar el primer jugador.');
                    }
                };

                // guarda los nuevos seleccionados
                inputsContainer.addEventListener('change', (event) => {
                    if (event.target.classList.contains('player-select')) {
                        updateSelectOptions();
                    }
                });

                //Eliminar último select picando botón
                removeInputButton.addEventListener('click', () => {
                    removeLastInput();
                });

                // Nuevo select picando botón
                addInputButton.addEventListener('click', () => {
                    addNewInput();
                });

                updateSelectOptions();
            });
        </script>
    @endsection
@endsection
