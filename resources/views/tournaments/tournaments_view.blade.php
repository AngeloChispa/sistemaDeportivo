@extends('layouts.admin_view')

@section('title', 'Tournaments table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Torneos
        @endslot
        @slot('p_content')
        Tabla que muestra los torneos registrados hasta el momento.
        @endslot
        @slot('reference','tournaments.index')
        @slot('create_something','Crear Torneo')

        {{-- @forelse ($players as $player)
            
        @empty
            
        @endforelse
         --}}
        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Logo</th>
                <th>tipo</th>
                <th>fecha de inicio</th>
                <th>fecha de finalización</th>
                <th>descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>1</td>
                <td>Super torneo de amigos jaguares</td>
                <td></td>
                <td>Liguilla</td>
                <td>10-12-2024</td>
                <td>24-12-2024</td>
                <td>Un torneo para celebrar el comienzo navideño</td>
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
                <td>2</td>
                <td>Super torneo de amigos jaguares</td>
                <td></td>
                <td>Liguilla</td>
                <td>10-12-2024</td>
                <td>24-12-2024</td>
                <td>Un torneo para celebrar el comienzo navideño</td>
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
                <td>3</td>
                <td>Super torneo de amigos jaguares</td>
                <td></td>
                <td>Liguilla</td>
                <td>10-12-2024</td>
                <td>24-12-2024</td>
                <td>Un torneo para celebrar el comienzo navideño</td>
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
                    text: "El torneo ha sido eliminado.",
                    icon: "success"
                    });
                }
                });
            });
        });
    </script>
    
@endsection
