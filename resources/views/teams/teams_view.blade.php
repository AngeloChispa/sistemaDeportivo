@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla de equipos --}}
    @component('_components.table')
        @slot('title')
            Equipos
        @endslot
        @slot('p_content')
            Tabla que muestra los equipos registrados hasta el momento.
        @endslot
        @slot('reference', 'teams.create')
        @slot('create_something', 'Crear Equipo')

        @slot('content_head')
            {{-- @empty($tournaments)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Deporte</th>
                    <th>Escudo</th>
                    <th colspan="3">Acción</th>
                </tr>
            @endempty --}}
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
            @forelse ($teams as $teams)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{$teams->id}}</td>
                    <td>{{$teams->name}}</td>
                    <td>{{$teams->city}}</td>
                    <td>{{$teams->state}}</td>
                    <td>{{$teams->sport->name}}</td>
                    <td>
                        @if ($teams->shield)
                            <img src="{{ asset('storage/' . $teams->shield) }}" alt="Logo de {{ $teams->shield }}"
                                width="100">
                        @else
                            Sin logo
                        @endif
                    </td>
                    <td>
                        <a href="{{route("teams.edit",$teams->id)}}" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{route("teams.destroy", $teams->id)}}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                    </td>
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent

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
                <tr>
                    <th>{{$sport->id}}</th>
                    <th>{{$sport->name}}</th>
                    <th>{{$sport->description}}</th>
                    <th colspan="2">Acción</th>
                </tr>
            @empty
            @endforelse
        @endslot
    @endcomponent

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
