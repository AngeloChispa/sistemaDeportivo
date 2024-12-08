@extends('layouts.admin_view')

@section('title', 'Instalations Table')

@section('content')
    {{-- Componente de tabla reutilizable --}}
    @component('_components.table')
        @slot('title')
            Instalaciones
        @endslot
        @slot('p_content')
            Tabla que muestra las instalaciones registradas hasta el momento.
        @endslot
        @slot('reference', 'instalations.create')
        @slot('create_something', 'Crear instalación')

        @slot('content_head')
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Capacidad</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot

        @slot('content_body')
            @forelse ($instalations as $instalation)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $instalation->id }}</td>
                    <td>{{ $instalation->name }}</td>
                    <td>
                        {{$instalation->nationality->country}}
                    </td>
                    <td>{{ $instalation->state }}</td>
                    <td>{{ $instalation->city }}</td>
                    <td>{{ $instalation->capacity }}</td>
                    <td>
                        <a href="{{ route('instalations.edit', $instalation) }}" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('instalations.destroy', $instalation) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('instalations.show', $instalation) }}" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No hay instalaciones registradas aún.</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent

    {{-- Scripts para alertas y confirmaciones. NUEVO --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {

eliminarBtn.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir envío del formulario inicialmente

    const form = this; // Guardar referencia al formulario actual

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
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "¡Sí, eliminalo!",
        cancelButtonText: "¡No, cancelalo!",
        reverseButtons: false,
        background: '#38322e',
        color: '#d4d4d8'
    }).then((result) => {
        if (result.isConfirmed) {
            // Mostrar animación de éxito y enviar el formulario
            swalWithBootstrapButtons.fire({
                title: "¡Eliminado!",
                text: "El elemento ha sido eliminado.",
                icon: "success",
                background: '#38322e',
                color: '#d4d4d8'
            }).then(() => {
                form.submit(); // Enviar el formulario después de cerrar la alerta
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
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
