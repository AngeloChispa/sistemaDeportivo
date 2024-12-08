@extends('layouts.admin_view')

@section('title', 'Editar Árbitro')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Árbitro
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{route("referees.update", $referee->id) }}"enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value',old('name', $referee->people->name))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
                @slot('value',old('lastname', $referee->people->lastname))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'date_birth')
                @slot('content', 'Fecha de nacimiento: ')
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
                @slot('for', 'nationality')
                @slot('content', 'Nacionalidad: ')
                @slot('type', 'text')
                @slot('name', 'nationality')
                @slot('id', 'nationality')
                @slot('value','valor ya definido')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'avatar')
                @slot('content', 'Foto: ')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
                @slot('value','valor ya definido')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'description')
                @slot('content', 'Descripción: ')
                @slot('type', 'text')
                @slot('name', 'description')
                @slot('id', 'description')
                @slot('value','valor ya definido')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('referees.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
