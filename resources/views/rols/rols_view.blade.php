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
                @empty($rols)
                    <th>No data</th>
                @else
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="3">Acción</th>
                @endempty
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($rols as $rol)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->name }}</td>
                    <td>{{ $rol->description }}</td>
                    <td>
                        <a href="{{route("rols.edit", $rol->id)}}" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('rols.destroy', $rol->id) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
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

            eliminarBtn.addEventListener('submit', function(event) {

                event.preventDefault(); // Detener el envío del formulario

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-5",
                        cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
                    },
                    buttonsStyling: true
                });

                swalWithBootstrapButtons.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "¡Sí, elíminalo!",
                    cancelButtonText: "Cancelar",
                    reverseButtons: false,
                    background: '#38322e',
                    color: '#d4d4d8'
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelado",
                            text: "El proceso ha sido cancelado.",
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
