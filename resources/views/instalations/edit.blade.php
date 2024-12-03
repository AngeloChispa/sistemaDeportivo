@extends('layouts.admin_view')

@section('title', 'Editar Instalación')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Instalación
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
                @slot('value', 'Valores ya definidos')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'country')
                @slot('content', 'País: ')
                @slot('name', 'country')
                @slot('id', 'country')
                @slot('more_options')
                    {{-- @forelse ($nationalities as $nationality)
                        <option value="{{ $nationality['id'] }}">{{ $nationality['country'] }}</option>
                    @empty
                        <option value="">No disponibles</option>                     
                    @endforelse --}}
                    <option value="1">México</option>
                    <option value="2">Estados Unidos</option>
                    <option value="3">Canadá</option>
                @endslot
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'state')
                @slot('content', 'Estado: ')
                @slot('type', 'text')
                @slot('name', 'state')
                @slot('id', 'state')
                @slot('value', 'Valores ya definidos')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'city')
                @slot('content', 'Ciudad: ')
                @slot('type', 'text')
                @slot('name', 'city')
                @slot('id', 'city')
                @slot('value', 'Valores ya definidos')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'capacity')
                @slot('content', 'Capacidad: ')
                @slot('name', 'capacity')
                @slot('id', 'capacity min=0')
                @slot('type', 'number')
                @slot('value', 'Valores ya definidos')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('instalations.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
