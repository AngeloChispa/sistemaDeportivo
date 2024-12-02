@extends('layouts.admin_view')

@section('title', 'Rols table')

@section('content')
    @component('_components.table')
        @slot('title')
            Roles
        @endslot
        @slot('p_content')
            Tabla que muestra los roles que se pueden aplicar a los usuarios.
        @endslot
        @slot('reference', 'rols.create')
        @slot('create_something', 'Registrar Rol')

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($rols as $rol)
            <tr class="border-b border-stone-700 h-16">
                <td>{{$rol->id}}</td>
                <td>{{$rol->name}}</td>
                <td>{{$rol->description}}</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#"
                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">Borrar</a>
                </td>
            </tr>
            @empty
                <p>No existen roles</p>
            @endforelse
        @endslot
    @endcomponent

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
                    text: "El elemento ha sido eliminado.",
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
