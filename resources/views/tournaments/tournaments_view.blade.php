@extends('layouts.admin_view')

@section('title', 'Tournaments table')

@section('content')
    {{-- Tabla dinámica para mostrar torneos --}}
    @component('_components.table')
        @slot('title')
            Torneos
        @endslot
        @slot('p_content')
            Tabla que muestra los torneos registrados hasta el momento.
        @endslot

        @slot('reference','tournaments.create')
        @slot('create_something','Registrar Torneo')

        @slot('content_head')
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Logo</th>
                <th>Tipo</th>
                <th>Fecha de inicio</th>
                <th>Fecha de finalización</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($tournaments as $tournament)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $tournament->id }}</td>
                    <td>{{ $tournament->name }}</td>
                    <td>
                        @if ($tournament->icon)
                            <img src="{{ asset('storage/' . $tournament->icon) }}" alt="Logo de {{ $tournament->name }}" width="50">
                        @else
                            Sin logo
                        @endif
                    </td>
                    <td>
                        @switch($tournament->type)
                          @case(1)
                            <p class="text-sm text-stone-400">Liga</p>
                            @break

                         @case(2)
                            <p class="text-sm text-stone-400">Eliminatoria</p>
                            @break

                        @case(3)
                            <p class="text-sm text-stone-400">Liga y Eliminación</p>
                            @break
                                @default
                         <p class="text-sm text-stone-400">CHUCHO</p>
                            @endswitch
                    </td>
                    <td>{{ $tournament->start_date }}</td>
                    <td>{{ $tournament->end_date }}</td>
                    <td>{{ $tournament->description }}</td>
                    <td>
                        <a href="{{ route('tournaments.edit', $tournament->id) }}" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('tournaments.show', $tournament->id) }}" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No hay torneos registrados aún.</td>
                </tr>
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