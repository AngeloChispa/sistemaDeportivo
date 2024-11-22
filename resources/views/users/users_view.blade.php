@extends('layouts.admin_view')

@section('title', 'Users table')

{{-- TODO: Poner bonito el no data found --}}

@section('content')
    @component('_components.table')
        @slot('title')
            Usuarios
        @endslot
        @slot('p_content')
            Tabla que muestra los usuarios registrados hasta el momento.
        @endslot
        @slot('reference', 'users.create')
        @slot('create_something', '+ Registrar Usuario')

        @slot('content_head')
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de registro</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>XxJuanitoMasterxX</td>
                <td>Juan</td>
                <td>Perez Castillo</td>
                <td>10-04-1999</td>
                <td>México</td>
                <td>Mexicano</td>
                <td>834277111</td>
                <td>correo@ejemplo.com.mx</td>
                <td>21-11-2024 10:20:15s</td>
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
                <td>XxJuanitoMasterxX</td>
                <td>Juan</td>
                <td>Perez Castillo</td>
                <td>10-04-1999</td>
                <td>México</td>
                <td>Mexicano</td>
                <td>834277111</td>
                <td>correo@ejemplo.com.mx</td>
                <td>21-11-2024 10:20:15s</td>
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
                <td>XxJuanitoMasterxX</td>
                <td>Juan</td>
                <td>Perez Castillo</td>
                <td>10-04-1999</td>
                <td>México</td>
                <td>Mexicano</td>
                <td>834277111</td>
                <td>correo@ejemplo.com.mx</td>
                <td>21-11-2024 10:20:15s</td>
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
        @endslot
    @endcomponent
@endsection


@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            eliminarBtn.addEventList formulario - eliminarener('click', function(event) {

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
                            text: "El jugador ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>

@endsection
