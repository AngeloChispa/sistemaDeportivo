<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tournament</title>
</head>
<body>
    <h1>Crear Nuevo Torneo</h1>
    <form action="{{ route('tournaments.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="icon">Icon (URL):</label>  <!-- CHECAR URL IMAGEN DESPUES -->
        <input type="text" id="icon" name="icon"><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br>

        <button type="submit">Crear Torneo</button>
    </form>
    <a href="{{ route('tournaments.index') }}">Regresar a la lista de Torneos</a>
</body>
</html>

@extends('layouts.admin_view')

@section('title', 'Registrar Torneo')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Torneo
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
                @slot('id', 'name')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'icon')
                @slot('content', 'Logo: ')
                @slot('type', 'file')
                @slot('name', 'icon')
                @slot('id', 'icon')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'type')
                @slot('content', 'Tipo de torneo: ')
                @slot('name', 'type')
                @slot('id', 'type')
                @slot('more_options')
                    <option value="1">Liga</option>
                    <option value="2">Eliminatoria</option>
                    <option value="3">Liga y Eliminatoria</option>
                @endslot
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'start_date')
                @slot('content', 'Fecha de inicio: ')
                @slot('type', 'date')
                @slot('name', 'start_date')
                @slot('id', 'start_date')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'end_date')
                @slot('content', 'Fecha de finalización: ')
                @slot('type', 'date')
                @slot('name', 'end_date')
                @slot('id', 'end_date')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'description')
                @slot('content', 'Descripción: ')
                @slot('type', 'text')
                @slot('name', 'description')
                @slot('id', 'description step=0.01 min=0')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('tournaments.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

