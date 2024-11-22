@extends('layouts.admin_view')

@section('title', 'Crear equipo')

<!-- Equipos {
	id_equipo integer pk increments unique
	nombre_equipo varchar(20)
	estado varchar(20)
	ciudad varchar(20)
	id_deporte integer *> Deportes.id_deporte
	escudo blob
	blob integer
	escudoblob integer
} -->

@section('content')
    <h1
        class="text-4xl text-center">
        Crear Equipo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md mt-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre del equipo:</label>
                <input type="text" name="name" id="name"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>
            <div>
                <label for="state" class="block text-sm font-semibold text-stone-200">Estado:</label>
                <input type="text" name="state" id="state"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>
            <div>
                <label for="city" class="block text-sm font-semibold text-stone-200">Ciudad:</label>
                <input type="text" name="city" id="city"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <label for="id_deporte" class="block text-sm font-semibold text-stone-200">Deporte:</label>
            <select id="id_deporte" name="id_deporte" class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                <option value="">Selecciona un deporte</option>
                <option value="1">Fútbol</option>
                <option value="2">Básquetbol</option>
                <option value="3">Béisbol</option>
            </select>

            <div>
                <label for="badge" class="block text-sm font-semibold text-stone-200">Escudo:</label>
                <input type="file" name="badge" id="badge"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('rols.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
