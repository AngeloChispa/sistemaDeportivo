@extends('layouts.admin_view')

@section('title', 'Editar Entrenador')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Entrenador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('trainers.update', $trainer->id) }}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', $trainer->people->name)
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
                @slot('value', $trainer->people->lastname)
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'birthdate')
                @slot('content', 'Fecha de nacimiento: ')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'birthdate')
                @slot('value', $trainer->people->birthdate)
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'birthplace')
                @slot('content', 'Lugar de nacimiento: ')
                @slot('name', 'birthplace')
                @slot('id', 'birthplace')
                @slot('value', $trainer->people->birthplace)
                @slot('more_options')
                    @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality->country }}"
                            {{ $trainer->people->birthplace == $nationality->country ? 'selected' : '' }}>
                            {{ $nationality->country }}
                        </option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'nationality')
                @slot('content', 'Nacionalidad: ')
                @slot('type', 'text')
                @slot('name', 'nationality')
                @slot('id', 'nationality')
                @slot('value', $trainer->people->birthplace)
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'avatar')
                @slot('content', 'Foto:')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
                @slot('currentfile', $trainer->people->avatar ?? null)
                @slot('alt', 'Foto del Entrenador')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'description')
                @slot('content', 'Descripción: ')
                @slot('type', 'text')
                @slot('name', 'description')
                @slot('id', 'description')
                @slot('value', $trainer->description)
            @endcomponent

            <div class="flex">
                <input type="submit" value="Actualizar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('trainers.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
