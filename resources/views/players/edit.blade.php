@extends('layouts.admin_view')

@section('title', 'Editar Jugador')
<!--CAMBIAR HTML BASICO POR COMPONENTES-->


@section('content')
    <h1 class="text-4xl text-center">
        Editar Jugador
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('players.update', $player->id) }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $player->people->name) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="lastname" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $player->people->lastname) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="date_birth" class="block text-sm font-semibold text-stone-200">Fecha de Nacimiento:</label>
                <input type="date" id="date_birth" name="birthdate" value="{{ old('date_birth', $player->people->birthdate) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>


            <div class="mb-4">
                <label for="country" class="block text-sm font-semibold text-stone-200">Nacionalidad:</label>
                <select id="country" name="country"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @foreach ($nationalities as $nationality)
                        <option value="{{ $nationality->id }}"
                            {{ old('birthplace', $player->people->birthplace) == $nationality->id ? 'selected' : '' }}>
                            {{ $nationality->country }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-sm font-semibold text-stone-200">Foto:</label>
                <input type="file" id="photo" name="photo"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                @if ($player->photo)
                    <div class="mt-2">
                        <p class="text-sm text-stone-400">Foto Actual:</p>
                        <img src="{{ asset('storage/' . $player->photo) }}" alt="Foto del Jugador" class="mt-2 h-16">
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-semibold text-stone-200">Estado:</label>
                <select id="status" name="status"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="1" {{ old('status', $player->status) == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="2" {{ old('status', $player->status) == 2 ? 'selected' : '' }}>Lesionado</option>
                    <option value="3" {{ old('status', $player->status) == 3 ? 'selected' : '' }}>Jubilado</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="height" class="block text-sm font-semibold text-stone-200">Altura:</label>
                <input type="number" id="height" name="height" value="{{ old('height', $player->height) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="bestSide" class="block text-sm font-semibold text-stone-200">Estado:</label>
                <select id="bestSide" name="bestSide"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="1" {{ old('bestSide', $player->bestSide) == 1 ? 'selected' : '' }}>Izquierdo</option>
                    <option value="2" {{ old('bestSide', $player->bestSide) == 2 ? 'selected' : '' }}>Derecho</option>
                </select>
            </div>




            <div class="flex">
                <input type="submit" value="Guardar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('players.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
