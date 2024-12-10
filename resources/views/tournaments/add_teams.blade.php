@extends('layouts.admin_view')

@section('title', 'Añadir Equipos')

@section('content')
    <h1 class="text-4xl text-center">
        Añadir equipos
    </h1>
    <div class="flex items-center justify-center">

        <form method="POST" action="{{route('tournaments.add', $tournament->id)}}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @foreach (range(1, 8) as $i)
                @component('_components.boxSelectInput')
                    @slot('for')
                        team-{{ $i }}
                    @endslot
                    @slot('content')
                        Equipo {{ $i }}:
                    @endslot
                    @slot('name', 'teams[]')
                    @slot('id')
                        team-{{ $i }}
                        class="team-select w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                    @endslot
                    @slot('more_options')
                        @forelse ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @empty
                            <option value="">No disponibles</option>
                        @endforelse
                    @endslot
                @endcomponent
            @endforeach

            <div class="flex">
                <button action="#"
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
                const selects = document.querySelectorAll('.team-select');

                selects.forEach(select => {
                    select.addEventListener('change', () => {
                        const selectedValues = Array.from(selects).map(s => s.value);

                        selects.forEach(s => {
                            const options = s.querySelectorAll('option');

                            options.forEach(option => {
                                if (selectedValues.includes(option.value) && option
                                    .value !== "") {
                                    option.disabled = true;
                                } else {
                                    option.disabled = false;
                                }
                            });
                        });
                    });
                });
            });
        </script>
    @endsection
@endsection
