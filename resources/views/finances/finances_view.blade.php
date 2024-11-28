@extends('layouts.admin_view')

@section('title', 'Finances table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Finanzas
        @endslot
        @slot('p_content')
            Tabla que muestra las finanzas registradas hasta el momento.
        @endslot
        @slot('reference', 'finances.create')
        @slot('create_something', 'Crear registro')

        {{-- @forelse ($players as $player)
            
        @empty
            
        @endforelse
         --}}
        @slot('content_head')
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
        @endslot
        @slot('content_body')
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

    @section('scripts')
    @component('_components.swal')
    @endcomponent

@endsection
