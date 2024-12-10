@extends('layouts.admin_view')

@section('title', 'Añadir Equipos')

@section('content')
    <h1 class="text-4xl text-center">
        Añadir equipos
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            <div id="inputs-container">
                <div class="input-wrapper">
                    @component('_components.boxSelectInput')
                        @slot('for')
                            team-1
                        @endslot
                        @slot('content')
                            Equipo 1:
                        @endslot
                        @slot('name', 'teams[]')
                        @slot('id')
                            team-1
                            class="team-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                        @endslot
                        @slot('more_options')
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        @endslot
                    @endcomponent
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
                    Agregar equipos
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
                    const selects = document.querySelectorAll('.team-select');

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
                @component('_components.boxSelectInput')
                    @slot('for')
                        team-${inputCount}
                    @endslot
                    @slot('content')
                        Equipo ${inputCount}:
                    @endslot
                    @slot('name', 'teams[]')
                    @slot('id')
                        team-${inputCount}
                        class="team-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                    @endslot
                    @slot('more_options')
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    @endslot
                @endcomponent
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
                        alert('No se puede eliminar el primer equipo.');
                    }
                };

                // guarda los nuevos seleccionados
                inputsContainer.addEventListener('change', (event) => {
                    if (event.target.classList.contains('team-select')) {
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
