@extends('layouts.admin_view')

@section('title', 'Registrar Patrocinador')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Patrocinador
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
                @slot('id', 'name required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'phone')
                @slot('content', 'Teléfono: ')
                @slot('type', 'phone')
                @slot('name', 'phone')
                @slot('id', 'phone required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'email')
                @slot('content', 'Correo: ')
                @slot('type', 'email')
                @slot('name', 'email')
                @slot('id', 'email required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'location')
                @slot('content', 'Ubicación: ')
                @slot('type', 'text')
                @slot('name', 'location')
                @slot('id', 'location required')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'type')
                @slot('content', 'Tipo de patrocinio: ')
                @slot('name', 'type')
                @slot('id', 'type required')
                @slot('more_options')
                    <option value="1">Por jugador</option>
                    <option value="2">Por equipo</option>
                    <option value="3">Por torneo</option>
                @endslot
            @endcomponent
            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('patrocinadores.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
