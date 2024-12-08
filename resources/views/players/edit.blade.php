@extends('layouts.admin_view')

@section('title', 'Editar Jugador')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Jugador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('players.update', $player->id) }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method('PUT')
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre:')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', old('name', $player->people->name))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'lastname')
                @slot('content', 'Apellido:')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
                @slot('value', old('lastname', $player->people->lastname))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'date_birth')
                @slot('content', 'Fecha de Nacimiento:')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'date_birth')
                @slot('value', old('birthdate', $player->people->birthdate))
            @endcomponent

            @component('_components.boxSelectInput')
    @slot('for', 'country')
    @slot('content', 'Nacionalidad:')
    @slot('name', 'country')
    @slot('id', 'country')
    @slot('more_options')
        @foreach ($nationalities as $nationality)
            <option value="{{ $nationality->id }}"
                {{ old('country', $player->nationality_id) == $nationality->id ? 'selected' : '' }}>
                {{ $nationality->country }}
            </option>
        @endforeach
    @endslot
@endcomponent


            @component('_components.boxInputEdit')
                @slot('for', 'avatar')
                @slot('content', 'Foto:')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
                @slot('currentfile', $player->avatar ?? null)
                @slot('alt', 'Foto del Jugador')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'status')
                @slot('content', 'Estado:')
                @slot('name', 'status')
                @slot('id', 'status')
                @slot('more_options')
                    <option value="1" {{ old('status', $player->status) == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="2" {{ old('status', $player->status) == 2 ? 'selected' : '' }}>Lesionado</option>
                    <option value="3" {{ old('status', $player->status) == 3 ? 'selected' : '' }}>Jubilado</option>
                @endslot
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'height')
                @slot('content', 'Altura:')
                @slot('type', 'number')
                @slot('name', 'height')
                @slot('id', 'height')
                @slot('value', old('height', $player->height))
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'bestSide')
                @slot('content', 'Mejor Pie:')
                @slot('name', 'bestSide')
                @slot('id', 'bestSide')
                @slot('more_options')
                    <option value="1" {{ old('bestSide', $player->bestSide) == 1 ? 'selected' : '' }}>Izquierdo</option>
                    <option value="2" {{ old('bestSide', $player->bestSide) == 2 ? 'selected' : '' }}>Derecho</option>
                @endslot
            @endcomponent

            <div class="flex">
                <input type="submit" value="Guardar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('players.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
