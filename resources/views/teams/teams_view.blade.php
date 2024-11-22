@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Equipos
        @endslot
        @slot('p_content')
        Tabla que muestra los equipos registrados hasta el momento.
        @endslot
        @slot('reference','teams.index')
        @slot('create_something','+ Crear Equipo')

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
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
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
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
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
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>
        @endslot
    @endcomponent

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            eliminarBtn.addEventListener('click', function(event) {
                
                event.preventDefault();
    
                // SweetAlert2
                Swal.fire({
                title: "¿Estás seguro?",
                text: "¡No podrás revertir esta acción!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Si, eliminalo!"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "¡Eliminado!",
                    text: "El equipo ha sido eliminado.",
                    icon: "success"
                    });
                }
                });
            });
        });
    </script>
    
@endsection
