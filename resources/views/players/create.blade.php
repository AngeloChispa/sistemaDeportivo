@extends('layouts.admin_view')

@section('title', 'Registrar Jugador')

@section('content')
    <h1
        class="text-4xl text-center">
        Registrar Jugador
    </h1>

    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md mt-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" name="name" id="name"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>
            <div>
                <label for="description" class="block text-sm font-semibold text-stone-200">Descripcion:</label>
                <input type="text" name="description" id="description"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('players.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
