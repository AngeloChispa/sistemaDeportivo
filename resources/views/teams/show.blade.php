@extends('layouts.show')

@section('title', 'Admin')

@section('h2', 'Equipo NombreRolConSignoPeso')

@section('href', 'teams.index')

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
    <a href="{{ route('teams.index') }}"
        class="block mt-4 text-center bg-rose-500 text-white py-2 rounded-lg hover:bg-rose-600">
        Volver a la Lista
    </a>
@endsection
