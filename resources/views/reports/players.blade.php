@extends('layouts.landing2')

@section('title', 'Players')

@section('content')
    @component('_components.table_export')
        @slot('title')
            Jugadores
        @endslot
        @slot('p_content')
            Tabla que muestra aquellos usuarios que se les ha asignado el rol de jugador.
        @endslot

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Estado</th>
                <th>Altura</th>
                <th>Lado dominante</th>
                <th>Equipo</th>
                <th>Posición</th>
                <th>Dorsal</th>
                <th>Fecha de asignación</th>
                <th>Torneos ganados</th>
                <th>Torneos jugados</th>
                <th>Partidos ganados</th>
                <th>Partidos jugados</th>
                <th>Goles</th>
                <th>Faltas</th>
                <th>Asistencias</th>
                <th>Tarjetas rojas</th>
                <th>Tarjetas amarillas</th>
                <th>Cantidad de títulos</th>
                <th>Fecha de registro</th>
            </tr>
        @endslot
        @slot('content_body')
        <tr class="border-b border-stone-700 h-16">
            <td>1</td>
            <td>Alan</td>
            <td>Garcia Pérez</td>
            <td>15-01-1998</td>
            <td>México</td>
            <td>Frances</td>
            <td>Lesionado</td>
            <td>1.67</td>
            <td>Zurdo</td>
            <td>Las truchas de cuernavaca</td>
            <td>Delantero</td>
            <td>11</td>
            <td>10-11-2019</td>
            <td>0</td>
            <td>3</td>
            <td>10</td>
            <td>24</td>
            <td>10</td>
            <td>2</td>
            <td>32</td>
            <td>3</td>
            <td>12</td>
            <td>1</td>
            <td>22-11-2024 06:22:30s</td>
        </tr>
        <tr class="border-b border-stone-700 h-16">
            <td>2</td>
            <td>Alan</td>
            <td>Garcia Pérez</td>
            <td>15-01-1998</td>
            <td>México</td>
            <td>Frances</td>
            <td>Lesionado</td>
            <td>1.67</td>
            <td>Zurdo</td>
            <td>Las truchas de cuernavaca</td>
            <td>Defensa central</td>
            <td>02</td>
            <td>10-11-2019</td>
            <td>0</td>
            <td>3</td>
            <td>10</td>
            <td>24</td>
            <td>10</td>
            <td>2</td>
            <td>32</td>
            <td>3</td>
            <td>12</td>
            <td>0</td>
            <td>22-11-2024 06:22:30s</td>
        </tr>
        <tr class="border-b border-stone-700 h-16">
            <td>3</td>
            <td>Alan</td>
            <td>Garcia Pérez</td>
            <td>15-01-1998</td>
            <td>México</td>
            <td>Frances</td>
            <td>Lesionado</td>
            <td>1.67</td>
            <td>Zurdo</td>
            <td>Las truchas de cuernavaca</td>
            <td>Portero</td>
            <td>08</td>
            <td>10-11-2019</td>
            <td>0</td>
            <td>3</td>
            <td>10</td>
            <td>24</td>
            <td>10</td>
            <td>2</td>
            <td>32</td>
            <td>3</td>
            <td>12</td>
            <td>2</td>
            <td>22-11-2024 06:22:30s</td>
        </tr>
        @endslot
    @endcomponent
@endsection