@extends('layouts.admin_view')

@section('title', 'Editar Equipo')

@section('content')
    <h1 class="text-4xl text-center">
       Editar Equipo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{route("teams.update", $teams->id)}}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            @component('_components.boxInputEdit')
                @slot('for', 'name')
                @slot('content', 'Nombre: ')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('id', 'name')
                @slot('value', old('name', $teams->name))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'state')
                @slot('content', 'Estado: ')
                @slot('type', 'text')
                @slot('name', 'state')
                @slot('id', 'state')
                @slot("value", old("state",$teams->state ))
            @endcomponent

            @component('_components.boxInputEdit')
                @slot('for', 'city')
                @slot('content', 'Ciudad: ')
                @slot('type', 'text')
                @slot('name', 'city')
                @slot('id', 'city')
                @slot("value", old("city",$teams->city))
            @endcomponent

            @component('_components.boxSelectInput')
            @slot('for', 'sport')
            @slot('content', 'Deporte: ')
            @slot('name', 'sport')
            @slot('id', 'sport')
            @slot('more_options')
            {{-- @forelse ($sports as $sport)
            <option value="{{ $sport['id'] }}">{{ $sport['name'] }}</option>
            @empty
            <option value="">No hay deportes</option>
            @endforelse --}}

            <option value="1" {{ old('sport', $teams->sport->id) == 1 ? 'selected' : '' }}>Futbol</option>
            <option value="2" {{ old('sport',  $teams->sport->id) == 2 ? 'selected' : '' }}>Basebol</option>
            <option value="3" {{ old('sport',  $teams->sport->id) == 3 ? 'selected' : '' }}>Basketbol</option>
            @endslot
            @endcomponent
            <p class="text-xs">¿Tu deporte no aparece en la lista? <a href="{{route('sport.create')}}" class="text-rose-500 underline">Regístralo</a></p>

            @component('_components.boxInputEdit')
            @slot('for', 'shield')
            @slot('content', 'Escudo: ')
            @slot('type', 'file')
            @slot('name', 'shield')
            @slot('id', 'shield')
        @endcomponent

        @if(isset($teams->shield) && !old('shield'))
            <div class="mt-2">
                <p class="text-sm text-gray-500">Imagen cargada previamente:</p>
                <img src="{{ asset('storage/' . $teams->shield) }}" alt="Escudo actual" class="h-24">
            </div>
        @endif


            <div class="flex">
                <input type="submit" value="Actualizar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('teams.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
