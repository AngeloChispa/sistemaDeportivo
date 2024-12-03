@extends('layouts.admin_view')

@section('title', 'Editar Patrocinador')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Patrocinador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('value','valor')
                @slot('id', 'name')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'phone')
                @slot('content', 'Teléfono: ')
                @slot('type', 'phone')
                @slot('value','valor')
                @slot('id', 'phone')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'email')
                @slot('content', 'Correo: ')
                @slot('type', 'email')
                @slot('value','valor')
                @slot('id', 'email')
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'location')
                @slot('content', 'Ubicación: ')
                @slot('type', 'text')
                @slot('value','valor')
                @slot('id', 'location')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'type')
                @slot('content', 'Tipo de patrocinio: ')
                @slot('id', 'type')
                @slot('more_options')
                    <option value="1">Por jugador</option>
                    <option value="2">Por equipo</option>
                    <option value="3">Por torneo</option>
                @endslot
            @endcomponent
            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('user.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
