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
        @slot('create_something', '+ Crear Rol')

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>1</td>
                <td>Jugador</td>
                <td>Aquel que juega partidos</td>
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
            <tr class="border-b border-stone-700 h-16">
                <td>2</td>
                <td>Entrenador</td>
                <td>Aquel que dirige equipos</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#"
                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 ho formulario-eliminarver:bg-red-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>3</td>
                <td>Arbitro</td>
                <td>Aquel que establece el orden en partidos</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#"
                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 ho formulario-eliminarver:bg-red-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16">
                <td>4</td>
                <td>Aficionado</td>
                <td>Aquella persona que no está involucrada en los juegos</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                </td>
                <td>
                    <a href="#"
                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 ho formulario-eliminarver:bg-rose-900">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                            text: "El rol ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>

@endsection
