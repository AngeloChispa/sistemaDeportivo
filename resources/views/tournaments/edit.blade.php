@extends('layouts.admin_view')

@section('title', 'Editar Torneo')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Torneo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('tournaments.update', $tournament->id) }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre:')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', old('name', $tournament->name))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'icon')
                @slot('content', 'Logo:')
                @slot('type', 'file')
                @slot('name', 'icon')
                @slot('id', 'icon')
                @slot('currentfile', $tournament->icon ?? null)
                @slot('alt', 'Logo del torneo')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'type')
                @slot('content', 'Tipo de torneo:')
                @slot('name', 'type')
                @slot('id', 'type')
                @slot('more_options')
                    <option value="1" {{ old('type', $tournament->type) == 1 ? 'selected' : '' }}>Liga</option>
                    <option value="2" {{ old('type', $tournament->type) == 2 ? 'selected' : '' }}>Eliminatoria</option>
                    <option value="3" {{ old('type', $tournament->type) == 3 ? 'selected' : '' }}>Liga y Eliminatoria</option>
                @endslot
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'start_date')
                @slot('content', 'Fecha de inicio:')
                @slot('type', 'date')
                @slot('name', 'start_date')
                @slot('id', 'start_date')
                @slot('value', old('start_date', $tournament->start_date))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'end_date')
                @slot('content', 'Fecha de finalización:')
                @slot('type', 'date')
                @slot('name', 'end_date')
                @slot('id', 'end_date')
                @slot('value', old('end_date', $tournament->end_date))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'description')
                @slot('content', 'Descripción:')
                @slot('type', 'textarea')
                @slot('name', 'description')
                @slot('id', 'description')
                @slot('value', old('description', $tournament->description))
            @endcomponent

            <div class="flex">
                <input type="submit" value="Guardar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('tournaments.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
