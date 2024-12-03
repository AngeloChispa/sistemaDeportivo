@extends('layouts.admin_view')

@section('title', 'Registrar usuario')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Partido
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{route('user.store')}}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputCreate')
                @slot('for','name')
                @slot('content','Nombre: ')
                @slot('type','text')
                @slot('name','name')
                @slot('id','name')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('games.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection