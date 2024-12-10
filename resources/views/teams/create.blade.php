@extends('layouts.admin_view')

@section('title', 'Registrar Equipo')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Equipo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data"
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
                @slot('for', 'state')
                @slot('content', 'Estado: ')
                @slot('type', 'text')
                @slot('name', 'state')
                @slot('id', 'state required')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'city')
                @slot('content', 'Ciudad: ')
                @slot('type', 'text')
                @slot('name', 'city')
                @slot('id', 'city required')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'sport')
                @slot('content', 'Deporte: ')
                @slot('name', 'sport')
                @slot('id', 'sport required')
                @slot('more_options')
                    @forelse ($sports as $sport)
                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                    @empty
                        <option value="">No disponibles</option>
                    @endforelse
                @endslot
            @endcomponent
            <p class="text-xs">¿Tu deporte no aparece en la lista? <a href="{{ route('sport.create') }}"
                    class="text-rose-500 underline">Regístralo</a></p>

            @component('_components.boxInputCreate')
                @slot('for', 'shield')
                @slot('content', 'Escudo: ')
                @slot('type', 'file')
                @slot('name', 'shield')
                @slot('id', 'shield accept=".png, .jpg, .jpeg"')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('teams.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
