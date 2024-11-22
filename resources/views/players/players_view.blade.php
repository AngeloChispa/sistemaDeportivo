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
                <th colspan="3">Acción</th>
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
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
        @endslot
    @endcomponent
@endsection
