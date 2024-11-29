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
        @slot('create_something', 'Crear Rol')

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
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
            @empty
                
            @endforelse
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
                            text: "El rol ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>

@endsection