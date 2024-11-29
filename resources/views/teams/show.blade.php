@extends('layouts.admin_view')

@section('title', 'Los jaguares de la UPV')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Escudo Los jaguares de la UPV"
                    class="w-30 h-30 rounded-full mx-auto mb-4">
                <p class="name text-xl text-red-500 font-bold uppercase mb-2">Los jaguares de la UPV</p>
                <p class="text-sm">Tamaulipas, cd.Victoria</p>
            </div>

            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información general del equipo</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Nombre: </strong>Los jaguares de la UPV</li>
                        <li><strong>Estado: </strong>Tamaulipas</li>
                        <li><strong>Ciudad: </strong>cd.Victoria</li>
                        <hr class="h-px my-8 bg-stone-500 border-0">
                        <li><strong>Deporte: </strong>Natación</li>
                        <li><strong>Jugadores en plantilla: </strong>10</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Títulos</h5>
                    <div class="flex flex-row">
                        <td>
                            <tr><img class="w-32 h-32 mx-2" src="{{asset('assets/img/usuario_icon_default.png')}}" alt="titulo"></tr>
                            <tr><img class="w-32 h-32 mx-2" src="{{asset('assets/img/usuario_icon_default.png')}}" alt="titulo"></tr>
                            <tr><img class="w-32 h-32 mx-2" src="{{asset('assets/img/usuario_icon_default.png')}}" alt="titulo"></tr>
                            <tr><img class="w-32 h-32 mx-2" src="{{asset('assets/img/usuario_icon_default.png')}}" alt="titulo"></tr>
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6 gap-6">
        @component('_components.table_export')
            @slot('title')
                Jugadores
            @endslot
            @slot('p_content')
                Jugadores del equipo.
            @endslot
            @slot('content_head')
                <tr>
                    {{-- @empty($variable)
                            <th>No hay jugadores asignados</th>
                        @else
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Nacionalidad</th>
                            <th>Estado</th>
                            <th>Altura</th>
                            <th>Fecha de registro</th>
                        @endempty --}}
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Estado</th>
                </tr>
            @endslot
            @slot('content_body')
                {{-- @forelse ($people as $person)
                        @if ($person->player)
                            <tr class="border-b border-stone-700 h-16">
                                <td>{{ $person->name }}</td>
                                <td>{{ $person->lastname }}</td>
                                <td>{{ $person->birthdate }}</td>
                                <td>{{ $person->nationality }}</td>
                                <td>{{ $person->nationality }}</td>
                            </tr>
                        @endif
                    @empty
                    @endforelse --}}
                <tr class="border-b border-stone-700 h-16">
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                </tr>
                <tr class="border-b border-stone-700 h-16">
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                    <th>a</th>
                </tr>
            @endslot
        @endcomponent
    </div>
@endsection
