@extends('layouts.admin_view')

@section('title', 'Registrar Árbitro')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Árbitro
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action={{route("referees.store")}} enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputCreate')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'date_birth')
                @slot('content', 'Fecha de nacimiento: ')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'date_birth required')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'country')
                @slot('content', 'Lugar de nacimiento: ')
                @slot('name', 'country')
                @slot('id', 'country required')
                @slot('more_options')
                    @forelse ($nationalities as $nationality)
                                    <option value="{{ $nationality->country }}">{{ $nationality->country }}</option>
                                @empty
                                    <option value="">No disponibles</option>
                                @endforelse
                @endslot
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'nationality')
                @slot('content', 'Nacionalidad: ')
                @slot('type', 'text')
                @slot('name', 'nationality')
                @slot('id', 'nationality')
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
                <a href="{{ route('referees.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
