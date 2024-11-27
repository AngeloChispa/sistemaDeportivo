@extends('layouts.admin_view')

@section('title', 'Editar Torneo')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Torneo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('tournaments.update', $tournament->id) }}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md mt-6" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $tournament->name) }}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="icon" class="block text-sm font-semibold text-stone-200">Logo:</label>
                <input type="file" name="icon" id="icon"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
                <!-- Aquí puedes mostrar la imagen actual si existe -->
                @if ($tournament->icon)
                    <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Logo Actual" class="mt-2 w-16 h-16">
                @endif
            </div>

            <div>
                <label for="type" class="block text-sm font-semibold text-stone-200">Tipo:</label>
                <input type="text" name="type" id="type" value="{{ old('type', $tournament->type) }}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="start_date" class="block text-sm font-semibold text-stone-200">Fecha de inicio:</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $tournament->start_date) }}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="end_date" class="block text-sm font-semibold text-stone-200">Fecha de fin:</label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $tournament->end_date) }}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="desc" class="block text-sm font-semibold text-stone-200">Descripción:</label>
                <input type="text" name="desc" id="description" value="{{ old('desc', $tournament->description) }}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div class="flex">
                <input type="submit" value="Guardar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('tournaments.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
