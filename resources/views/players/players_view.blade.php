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
        @slot('create_something','Crear Jugador')

        {{-- @forelse ($players as $player)
            
        @empty
            
        @endforelse
         --}}
        @slot('content_head')
            <tr>
                {{-- <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Estado</th>
                <th>Altura</th>
                <th>Lado dominante</th>
                <th>Fecha de registro</th>
                <th colspan="3">Acción</th> --}}
                <th>Estatus</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Lado dominante</th>
                <th>Lugar de Nacimiento</th>
                <th>Nacionalidad</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')

            @forelse ($players as $player)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $player->status }}</td>
                    <td>{{ $player->height }}</td>
                    <td>{{ $player->weight }}</td>
                    <td>{{ $player->dominant_side }}</td>
                    <td>{{ $player->birthplace }}</td>
                    <td>{{ $player->nationality }}</td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">Borrar</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">No hay jugadores disponibles.</td>
                </tr>
            @endforelse
            
            
        @endslot
    @endcomponent

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            
            eliminarBtn.addEventListener('click', function(event) {
                
                event.preventDefault();
    
                // SweetAlert2
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700",
                        cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
                },
                buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                    title: "¡Eliminado!",
                    text: "El jugador ha sido eliminado.",
                    icon: "success"
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                    });
                }
                });
            });
        });
    </script>@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
        
        eliminarBtn.addEventListener('click', function(event) {
            
            event.preventDefault();

            // SweetAlert2
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-5",
                    cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
            },
            buttonsStyling: true
            });
            swalWithBootstrapButtons.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás ser capaz de revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Si, eliminalo!",
            cancelButtonText: "¡No, cancelalo!",
            reverseButtons: false,
            background: '#38322e',
            color: '#d4d4d8'
            }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                title: "¡Eliminado!",
                text: "El jugador ha sido eliminado.",
                icon: "success",
                background: '#38322e',
                color: '#d4d4d8'
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Proceso cancelado :)",
                icon: "error",
                background: '#38322e',
                color: '#d4d4d8'
                });
            }
            });
        });
    });
</script>
    
@endsection
