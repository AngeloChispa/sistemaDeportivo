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
            @slot('for', 'birthplace')
            @slot('content', 'Lugar de nacimiento: ')
            @slot('name', 'birthplace')
            @slot('id', 'birthplace')
            @slot('value', $player->people->birthplace)
            @slot('more_options')
                @forelse ($nationalities as $nationality)
                    <option value="{{ $nationality->country }}"
                        {{ $player->people->birthplace == $nationality->country ? 'selected' : '' }}>
                        {{ $nationality->country }}
                    </option>
                @empty
                    <option value="">No disponibles</option>
                @endforelse
            @endslot
        @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'avatar')
                @slot('content', 'Foto:')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
                @slot('currentfile', $player->people->avatar ?? null)
                @slot('alt', 'Foto del Jugador')
            @endcomponent

            <div>
                <label for="status" class="block text-sm font-semibold text-stone-200">Estado:</label>
                <select name="status" id="status" class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    <option value="">-</option>
                    <option value="Activo" {{ old('status', $player->status) == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Lesionado" {{ old('status', $player->status) == 'Lesionado' ? 'selected' : '' }}>Lesionado</option>
                    <option value="Jubilado" {{ old('status', $player->status) == 'Jubilado' ? 'selected' : '' }}>Jubilado</option>
                </select>
            </div>


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
                <option value="Izquierdo" {{ old('bestSide', $player->bestSide) == 'Izquierdo' ? 'selected' : '' }}>Izquierdo</option>
                <option value="Derecho" {{ old('bestSide', $player->bestSide) == 'Derecho' ? 'selected' : '' }}>Derecho</option>
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
