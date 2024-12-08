@extends('layouts.admin_view')

@section('title', 'Editar Entrenador')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Entrenador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', '{{$trainer->people->name}}')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'lastname')
                @slot('content', 'Apellidos: ')
                @slot('type', 'text')
                @slot('name', 'lastname')
                @slot('id', 'lastname')
                @slot('value', 'valor ya definido')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'date_birth')
                @slot('content', 'Fecha de nacimiento: ')
                @slot('type', 'date')
                @slot('name', 'birthdate')
                @slot('id', 'date_birth')
                @slot('value', 'valor ya definido')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'birthplace')
                @slot('content', 'Lugar de nacimiento: ')
                @slot('name', 'birthplace')
                @slot('id', 'birthplace')
                @slot('value', 'valor ya definido')
                @slot('more_options')
                    @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality['id'] }}">{{ $nationality['country'] }}</option>
                    @empty
                        <option value="">No disponibles</option>                     
                    @endforelse
                @endslot
            @endcomponent

            {{-- No sé si la lógica sea correcta --}}
           {{--  <div class="mb-4">
                <label for="birthplace" class="block text-sm font-semibold text-stone-200">Lugar de nacimiento:</label>
                <select id="birthplace" name="birthplace"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality['id'] }}" {{ old('id', $tournament->id) == 1 ? 'selected' : '' }}>{{ $nationality['country'] }}</option>
                    @empty
                        <option value="">No disponibles</option>                     
                    @endforelse
                </select>
            </div> --}}

            @component('_components.boxInputEdit')
                @slot('for', 'nationality')
                @slot('content', 'Nacionalidad: ')
                @slot('type', 'text')
                @slot('name', 'nationality')
                @slot('id', 'nationality')
                @slot('value', 'valor ya definido')  
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'avatar')
                @slot('content', 'Foto: ')
                @slot('type', 'file')
                @slot('name', 'avatar')
                @slot('id', 'avatar')
                @slot('value', 'valor ya definido')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'description')
                @slot('content', 'Descripción: ')
                @slot('type', 'text')
                @slot('name', 'description')
                @slot('id', 'description')
                @slot('value', 'valor ya definido')
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
