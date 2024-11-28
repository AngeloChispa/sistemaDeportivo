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
        @slot('create_something','Crear Torneo')

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
    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            eliminarBtn.addEventListener('click', function(event) {
                event.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esta acción!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Sí, elimínalo!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
