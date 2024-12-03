@extends('layouts.admin_view')

@section('title', 'Users table')

@section('content')
    @component('_components.table')
        @slot('title')
            Finanzas
        @endslot
        @slot('p_content')
            Tabla que muestra las finanzas registradas hasta el momento.
        @endslot
        @slot('reference', 'finances.create')
        @slot('create_something', 'Registrar Operación')

        @slot('content_head')
           {{--  @empty($finances)
                <th>Tabla vacía</th>
            @else --}}
                <tr>
                    <th>Id Transacción</th>
                    <th>Id Patrocinador</th>
                    <th>Id Usuario</th>
                    <th>Monto</th>
                    <th>Fecha/Hora</th>
                    <th>Concepto</th>
                    <th>Tipo de Transacción</th>
                    <th colspan="3">Acción</th>
                </tr>
            {{-- @endempty --}}
        @endslot
        @slot('content_body')
            {{-- @forelse ($finances as $finance)
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
                    <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
                <td class="text-center">No hay torneos registrados aún.</td>
            </tr>
        @endforelse --}}

            <tr class="border-b border-stone-700 h-16">
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>12 p</td>
                <td>Jueves</td>
                <td>Calle las palmas</td>
                <td>Deposito</td>
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
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>

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
