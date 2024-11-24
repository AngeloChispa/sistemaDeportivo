@extends('layouts.admin_view')

@section('title', 'Rols table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Jugadores
        @endslot
        @slot('p_content')
            Tabla que muestra aquellos usuarios que se les ha asignado el rol de jugador.
        @endslot
        @slot('reference','players.index')
        @slot('create_something','+ Crear Jugador')

        {{-- @forelse ($players as $player)
            
        @empty
            
        @endforelse
         --}}
        @slot('content_head')
            <tr>
                <th>Song</th>
                <th>Song</th>
                <th>Song</th>
                <th>Song</th>
                <th>Artist</th>
                <th>Artist</th>
                <th>AAAAAAAa</th>
                <th>Sonaaaa</th>
                <th>Sonaaaa</th>
                <th>Artiasdasdt</th>
                <th>Yeaeyewuir</th>
                <th colspan="2">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-red-500 hover:underline">Borrar</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-red-500 hover:underline">Borrar</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>Malcolm Lockyer</td>
                <td class="text-center">1961</td>
                <td>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-red-500 hover:underline">Borrar</a>
                </td>
            </tr>
        @endslot
    @endcomponent
@endsection
