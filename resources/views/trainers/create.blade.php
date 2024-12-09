@extends('layouts.admin_view')

@section('title', 'Registrar Entrenador')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Entrenador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('trainers.store') }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            <!-- Campo Nombre -->
            @component('_components.boxInputCreate')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('required', 'required')
            @endcomponent

            <!-- Campo Apellidos -->
            @component('_components.boxInputCreate')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
                @slot('required', 'required')
            @endcomponent

            <!-- Campo Fecha de Nacimiento -->
            @component('_components.boxInputCreate')
                @slot('for', 'birthdate')
                @slot('content', 'Fecha de nacimiento: ')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'birthdate')
                @slot('required', 'required')
            @endcomponent

            <!-- Campo Lugar de Nacimiento (Nacionalidad) -->
            @component('_components.boxSelectInput')
                @slot('for', 'birthplace')
                @slot('content', 'Lugar de nacimiento: ')
                @slot('name', 'birthplace')
                @slot('id', 'birthplace')
                @slot('required', 'required')
                @slot('more_options')
                    @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality->country }}">{{ $nationality->country }}</option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent

            <!-- Campo Avatar -->
            @component('_components.boxInputCreate')
                @slot('for', 'avatar')
                @slot('content', 'Foto: ')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
            @endcomponent

            <!-- Campo Descripción -->
            @component('_components.boxInputCreate')
                @slot('for', 'description')
                @slot('content', 'Descripción: ')
                @slot('type', 'text')
                @slot('name', 'description')
                @slot('id', 'description')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('trainers.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
