@extends('layouts.admin_view')

@section('title', 'Users table')

@section('content')
    @component('_components.table')
        @slot('title')
            Finanzas
        @endslot
        @slot('p_content')
            Tabla que muestra las finanzas registradas hasta el momento.
        @endslot
        @slot('reference', 'finances.create')
        @slot('create_something', 'Crear Registro')

        @slot('content_head')
            @empty($people)
                <th>Tabla vacía</th>
            @else
                <tr>
                    <th>Id Transacción</th>
                    <th>Id Patrocinador</th>
                    <th>Id Usuario</th>
                    <th>Monto</th>
                    <th>Fecha/Hora</th>
                    <th>Concepto</th>
                    <th>Tipo de Transacción</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endempty
        @endslot
        @slot('content_body')
            {{-- @forelse ($tournaments as $tournament)
            <tr class="border-b border-stone-700 h-16">
                <td>{{ $tournament->id }}</td>
                <td>{{ $tournament->name }}</td>
                <td>
                    @if ($tournament->icon)
                        <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Logo de {{ $tournament->name }}" width="50">
                    @else
                        Sin logo
                    @endif
                </td>
                <td>
                    @switch($tournament->type)
                    @case(1)
                        <p class="text-sm text-stone-400">Liga</p>
                        @break

                    @case(2)
                        <p class="text-sm text-stone-400">Eliminatoria</p>
                        @break

                    @case(3)
                        <p class="text-sm text-stone-400">Liga y Eliminación</p>
                        @break
                            @default
                    <p class="text-sm text-stone-400">CHUCHO</p>
                        @endswitch
                </td>
                <td>{{ $tournament->start_date }}</td>
                <td>{{ $tournament->end_date }}</td>
                <td>{{ $tournament->description }}</td>
                <td>
                    <a href="{{ route('tournaments.edit', $tournament->id) }}" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" class="inline formulario-eliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('tournaments.show', $tournament->id) }}" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center">No hay torneos registrados aún.</td>
            </tr>
        @endforelse --}}

        <tr class="border-b border-stone-700 h-16">
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>12 p</td>
            <td>Jueves</td>
            <td>Calle las palmas</td>
            <td>Deposito</td>
            <td>
                <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
            </td>
            <td>
                <a href="#"
                    class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
            </td>
            <td>
                <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
            </td>
        </tr>
        
        @endslot
    @endcomponent
@endsection


@section('scripts')
@component('_components.swal')
@endcomponent
    

@endsection