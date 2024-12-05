@extends('layouts.admin_view')

@section('title', 'Árbitros')

@section('content')
    @component('_components.table')
        @slot('title')
            Árbitros
        @endslot
        @slot('p_content')
            Tabla que muestra los árbitros registrados hasta el momento.
        @endslot
        @slot('reference', 'referees.create')
        @slot('create_something', 'Registrar Árbitro')

        @slot('content_head')
            {{-- @empty($referees)
                <th>Tabla vacía</th>
            @else
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Descripción</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endempty --}}
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($referees as $referee)
            <tr>
                <td>{{$referee->id}}</td>
                <td>{{$referee->people->name}}</td>
                <td>{{$referee->people->lastname}}</td>
                <td>{{$referee->people->birthdate}}</td>
                <td>{{$referee->people->birthplace}}</td>
                <td>{{$referee->people->birthplace}}</td>
                <td>{{$referee->description}}</td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <form action="#" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                            Borrar
                        </button>
                    </form>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-200 bg-green-500 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                </td>
            </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent

    {{-- Script de eliminación con SweetAlert2 --}}
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
