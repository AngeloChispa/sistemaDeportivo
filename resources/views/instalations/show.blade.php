@extends('layouts.admin_view')

@section('title', 'Instalación')

@section('content')
    <h1 class="pt-4 text-center text-3xl font-bold">Nombre Instalación</h1>
    <div class="p-6">

        <div class="info-container flex-1 flex flex-col gap-6">
            <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                <h5 class="text-lg text-red-500 font-semibold mb-4">Información Personal</h5>
                <ul class="text-sm space-y-2">
                    <li><strong>Nombre: </strong>{{$instalation->name}}</li>
                    <li><strong>País: </strong>{{$instalation->country}}</li>
                    <li><strong>Estado: </strong>{{$instalation->state}}</li>
                    <li><strong>Ciudad: </strong>{{$instalation->city}}</li>
                    <li><strong>Capacidad: </strong>{{$instalation->capacity}} personas</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="px-6 gap-6">
        @component('_components.table_export')
            @slot('title')
                Partidos agendados
            @endslot
            @slot('p_content')
                Aquellos partidos agendados que sucedieron y sucederán en la instalación
            @endslot
            @slot('content_head')
                <tr>
                    {{-- @empty($variable)
                        <th>No hay jugadores asignados</th>
                    @else
                        <th>Fecha</th>
                        <th>Hora de inicio</th>
                        <th>Hora de finalización</th>
                    @endempty --}}
                    <th class="w-1/2">Fecha</th>
                    <th class="w-1/4">Hora de inicio</th>
                    <th class="w-1/4">Hora de finalización</th>
                </tr>
            @endslot
            @slot('content_body')
                {{-- @forelse ($people as $person)
                    @if ($person->player)
                    <tr class="border-b border-stone-700 h-16">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td>No data found</td>
                    </tr>
                    @endforelse --}}
                <tr class="border-b border-stone-700 h-16">
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            @endslot
        @endcomponent
    </div>
@endsection
