@extends('layouts.admin_view')

@section('title', 'Editar Instalación')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Instalación
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('instalations.update', $instalation->id) }}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            @component('_components.boxInputCreate')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', old('name', $instalation->name))
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'country')
                @slot('content', 'País: ')
                @slot('name', 'country')
                @slot('id', 'country')
                @slot('more_options')
                    <option value="1" {{ old('country', $instalation->country) == 1 ? 'selected' : '' }}>México</option>
                    <option value="2" {{ old('country', $instalation->country) == 2 ? 'selected' : '' }}>Estados Unidos</option>
                    <option value="3" {{ old('country', $instalation->country) == 3 ? 'selected' : '' }}>Canadá</option>
                @endslot
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'state')
                @slot('content', 'Estado: ')
                @slot('type', 'text')
                @slot('name', 'state')
                @slot('id', 'state')
                @slot('value', old('state', $instalation->state))
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'city')
                @slot('content', 'Ciudad: ')
                @slot('type', 'text')
                @slot('name', 'city')
                @slot('id', 'city')
                @slot('value', old('city', $instalation->city))
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'capacity')
                @slot('content', 'Capacidad: ')
                @slot('type', 'number')
                @slot('name', 'capacity')
                @slot('id', 'capacity')
                @slot('value', old('capacity', $instalation->capacity))
            @endcomponent

            <div class="flex">
                <input type="submit" value="Actualizar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('instalations.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>

    </div>
@endsection
