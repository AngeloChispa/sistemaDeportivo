<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo</title>
</head>
<body>
    <h1>{{ $tournament->name }}</h1>
    <p><strong>Type:</strong> {{ $tournament->type }}</p>
    <p><strong>Start Date:</strong> {{ $tournament->start_date }}</p>
    <p><strong>End Date:</strong> {{ $tournament->end_date }}</p>
    <p><strong>Description:</strong> {{ $tournament->description }}</p>
    <img src="{{ $tournament->icon }}" alt="{{ $tournament->name }} " style="max-width: 200px;">

    <a href="{{ route('tournaments.edit', $tournament) }}">Editar</a>
    <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('tournaments.index') }}">Regresar a la lista de Torneos</a>
</body>
</html>

@extends('layouts.show')

@section('title', 'Admin')

@section('h2', 'Torneo NombreRolConSignoPeso')

@section('href', 'tournaments.index')

@section('data')
    @component('_components.dataContent')
        @slot('data_name', 'Perritos')
        @slot('data_value', '20')
    @endcomponent
    @component('_components.dataContent')
        @slot('data_name', 'Perritos')
        @slot('data_value', '20')
    @endcomponent
    @component('_components.dataContent')
        @slot('data_name', 'Perritos')
        @slot('data_value', '20')
    @endcomponent
    @component('_components.dataContent')
        @slot('data_name', 'Perritos')
        @slot('data_value', '20')
    @endcomponent
@endsection

@section('link')
    <a href="{{ route('tournaments.index') }}"
        class="block mt-4 text-center bg-rose-500 text-white py-2 rounded-lg hover:bg-rose-600">
        Volver a la Lista
    </a>
@endsection
