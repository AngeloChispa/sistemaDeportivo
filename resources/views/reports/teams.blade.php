@extends('layouts.landing2')

@section('title', 'Teams')

@section('content')
    @component('_components.table_export')
        @slot('title')
            Equipos
        @endslot
        @slot('p_content')
            Tabla que muestra equipos los cuales se pueden asignar en diversos torneos.
        @endslot

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Deporte</th>
                <th>Escudo</th>
                <th>Torneos ganados</th>
                <th>Torneos jugados</th>
                <th>Partidos ganados</th>
                <th>Partidos jugados</th>
                <th>Puntos</th>
                <th>Fecha de registro</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>1</td>
                <td>Los jaguares agresivos de tangamandapio</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Basquetball</td>
                <td></td>
                <td>1</td>
                <td>3</td>
                <td>6</td>
                <td>5</td>
                <td>34</td>
                <td>22-11-2024</td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>2</td>
                <td>Las truchas de cuernavaca</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Futbol</td>
                <td></td>
                <td>0</td>
                <td>3</td>
                <td>9</td>
                <td>3</td>
                <td>11</td>
                <td>22-11-2024</td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>3</td>
                <td>Los changos de los azulitos</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Natación</td>
                <td></td>
                <td>0</td>
                <td>1</td>
                <td>3</td>
                <td>4</td>
                <td>12</td>
                <td>22-11-2024</td>
            </tr>
        @endslot
    @endcomponent
@endsection