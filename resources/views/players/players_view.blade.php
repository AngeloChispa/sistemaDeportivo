@extends('layouts.admin_view')

@section('title', 'Players table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Jugadores
        @endslot
        @slot('p_content')
            Tabla que muestra aquellos usuarios que se les ha asignado el rol de jugador.
        @endslot
        @slot('reference', 'players.create')
        @slot('create_something', 'Registrar Jugador')

        @slot('content_head')
            @empty($sports)
                <tr>
                    <th>id</th>
                    <th>ID del Jugador</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Estado</th>
                    <th>Altura</th>
                    <th>Lado dominante</th>
                    <th>Fecha de registro</th>
                    <th colspan="3">Acción</th>
                </tr>
            @else
                <tr>
                    <th>No data</th>
                </tr>
            @endempty

        @endslot
        @slot('content_body')
            @forelse ($people as $person)

                @if ($person->player)
                    <tr class="border-b border-stone-700 h-16">
                        <td>{{ $person->id }}</td>
                        <td>{{ $person->player->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->birthdate }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td>{{ $person->player->height }}</td>
                        <td>
                            {{ $person->player->bestSide }}
                        </td>
                        <td>
                            <a href="#"
                                class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                        </td>
                        <td>
                            <form action="#" method="POST" class="inline formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                            </form>
                        </td>
                        <td>
                            <a href="#"
                                class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td class="text-center">No hay Jugadores registrados aún.</td>
                </tr>
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
