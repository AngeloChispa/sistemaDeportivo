@extends('layouts.admin_view')

@section('title', 'Añadir Jugadores')

@section('content')
    <h1 class="text-4xl text-center">
        Añadir Jugadores
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('teams.storePlayers', $team->id) }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            <div id="inputs-container">
                <!-- Este es el primer formulario (jugador 1) -->
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
                        @endslot
                        @slot('required', 'required')
                        @slot('class', 'player-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500')
                        @slot('more_options')
                            @foreach($players as $player)
                                <option value="{{ $player->id }}">{{ $player->people->name }}</option>
                            @endforeach
                        @endslot
                    @endcomponent

                    <div class="w-1/6">
                        @component('_components.boxInputCreate')
                            @slot('for', 'dorsal')
                            @slot('content', 'Dorsal: ')
                            @slot('name', 'dorsal[]')
                            @slot('id', 'dorsal-1')
                            @slot('type', 'number')
                            @slot('min', 1)
                            @slot('required', 'required')
                        @endcomponent
                    </div>

                    <div class="w-1/6">
                        @component('_components.boxInputCreate')
                            @slot('for', 'position')
                            @slot('content', 'Posición: ')
                            @slot('name', 'position[]')
                            @slot('id', 'position-1')
                            @slot('type', 'text')
                            @slot('required', 'required')
                        @endcomponent
                    </div>

                    <div class="w-1/6">
                        @component('_components.boxInputCreate')
                            @slot('for', 'assignment_date')
                            @slot('content', 'Fecha de entrada: ')
                            @slot('name', 'assignment_date[]')
                            @slot('id', 'assignment_date-${inputCount}')
                            @slot('type', 'date')
                        @endcomponent
                    </div>

                    <label for="captain" class="self-center">Es capitán: </label>
                    <input type="radio" name="captain" value="player-1" id="captain-1">
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
                    Agregar jugadores
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

                    const selectedValues = Array.from(selects)
                        .map(select => select.value)
                        .filter(value => value !== "");

                    selects.forEach(select => {
                        const options = select.querySelectorAll('option');

                        options.forEach(option => {
                            option.disabled = false;
                            if (selectedValues.includes(option.value) && select.value !== option.value) {
                                option.disabled = true;
                            }
                        });
                    });
                };

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
                                @endslot
                                @slot('class', 'player-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500')
                                @slot('more_options')
                                    @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->people->name }}</option>
                                    @endforeach
                                @endslot
                            @endcomponent

                            <div class="w-1/6">
                                @component('_components.boxInputCreate')
                                    @slot('for', 'dorsal')
                                    @slot('content', 'Dorsal: ')
                                    @slot('name', 'dorsal[]')
                                    @slot('id', 'dorsal-${inputCount}')
                                    @slot('type', 'number')
                                    @slot('min', 1)
                                    @slot('required', 'required')
                                @endcomponent
                            </div>

                            <div class="w-1/6">
                                @component('_components.boxInputCreate')
                                    @slot('for', 'position')
                                    @slot('content', 'Posición: ')
                                    @slot('name', 'position[]')
                                    @slot('id', 'position-${inputCount}')
                                    @slot('type', 'text')
                                    @slot('required', 'required')
                                @endcomponent
                            </div>

                            <div class="w-1/6">
                                @component('_components.boxInputCreate')
                                    @slot('for', 'assignment_date')
                                    @slot('content', 'Fecha de entrada: ')
                                    @slot('name', 'assignment_date[]')
                                    @slot('id', 'assignment_date-${inputCount}')
                                    @slot('type', 'date')
                                @endcomponent
                            </div>

                            <label for="captain" class="self-center">Es capitán: </label>
                            <input type="radio" name="captain" value="player-${inputCount}" id="captain-${inputCount}">
                        </div>
                    `;

                    inputsContainer.appendChild(newInput);
                    updateSelectOptions();
                };

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

                inputsContainer.addEventListener('change', (event) => {
                    if (event.target.classList.contains('player-select')) {
                        updateSelectOptions();
                    }
                });

                removeInputButton.addEventListener('click', () => {
                    removeLastInput();
                });

                addInputButton.addEventListener('click', () => {
                    addNewInput();
                });

                updateSelectOptions();
            });
        </script>
    @endsection
@endsection
