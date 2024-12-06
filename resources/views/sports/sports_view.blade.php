@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla deportes --}}
    @component('_components.table')
        @slot('title')
            Deportes
        @endslot
        @slot('p_content')
            Tabla que muestra los deportes registrados hasta el momento.
        @endslot
        @slot('reference', 'sport.create')
        @slot('create_something', 'Registrar deporte')

        @slot('content_head')
            @empty($sports)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="2">Acción</th>
                </tr>
            @endempty
        @endslot
        @slot('content_body')
            @forelse ($sports as $sport)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{$sport->id}}</td>
                    <td>{{$sport->name}}</td>
                    <td>{{$sport->description}}</td>
                    <td>
                        <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="#" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
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
