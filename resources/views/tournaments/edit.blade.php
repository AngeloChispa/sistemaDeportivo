@extends('layouts.admin_view')

@section('title', 'Editar Torneo')

<!--CAMBIAR HTML BASICO POR COMPONENTES-->

@section('content')
    <h1 class="text-4xl text-center">
        Editar Torneo
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('tournaments.update', $tournament->id) }}" enctype="multipart/form-data"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method("PUT")
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $tournament->name) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="icon" class="block text-sm font-semibold text-stone-200">Logo:</label>
                <input type="file" id="icon" name="icon"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                @if ($tournament->icon)
                    <div class="mt-2">
                        <p class="text-sm text-stone-400">Logo Actual:</p>
                        <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Logo del Torneo" class="mt-2 h-16">
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-semibold text-stone-200">Tipo de torneo:</label>
                <select id="type" name="type"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="1" {{ old('type', $tournament->type) == 1 ? 'selected' : '' }}>Liga</option>
                    <option value="2" {{ old('type', $tournament->type) == 2 ? 'selected' : '' }}>Eliminatoria</option>
                    <option value="3" {{ old('type', $tournament->type) == 3 ? 'selected' : '' }}>Liga y Eliminatoria</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-sm font-semibold text-stone-200">Fecha de inicio:</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $tournament->start_date) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-sm font-semibold text-stone-200">Fecha de finalización:</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $tournament->end_date) }}"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-stone-200">Descripción:</label>
                <textarea id="description" name="description" rows="3"
                    class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">{{ old('description', $tournament->description) }}</textarea>
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
