@extends('layouts.admin_view')

@section('title', 'Registrar Jugador')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Jugador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputCreate')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'date_birth')
                @slot('content', 'Fecha de nacimiento: ')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'date_birth')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'nationality')
                @slot('content', 'Nacionalidad: ')
                @slot('name', 'nationality')
                @slot('id', 'nationality')
                @slot('more_options')
                    @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality['id'] }}">{{ $nationality['country'] }}</option>
                    @empty
                        <option value="">No disponibles</option>                     
                    @endforelse
                @endslot
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'avatar')
                @slot('content', 'Foto: ')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
            @endcomponent

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
                <a href="{{ route('.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection