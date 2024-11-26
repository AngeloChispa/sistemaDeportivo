@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Equipos
        @endslot
        @slot('p_content')
        Tabla que muestra los equipos registrados hasta el momento.
        @endslot
        @slot('reference','teams.index')
        @slot('create_something','+ Crear Equipo')

        {{-- @forelse ($players as $player)
            
        @empty
            
        @endforelse
         --}}
        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Deporte</th>
                <th>Escudo</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            <tr class="border-b border-stone-700 h-16">
                <td>1</td>
                <td>Los jaguares agresivos de tangamandapio</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Basquetball</td>
                <td></td>
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
                <td>Los jaguares agresivos de tangamandapio</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Futbol</td>
                <td></td>
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
                <td>Los jaguares agresivos de tangamandapio</td>
                <td>Victoria</td>
                <td>Tamaulipas</td>
                <td>Natación</td>
                <td></td>
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
                const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
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
                    title: "Deleted!",
                    text: "Your file has been deleted.",
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
    </script>
    
@endsection
