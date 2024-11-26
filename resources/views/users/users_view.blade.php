@extends('layouts.admin_view')

@section('title', 'Users table')

{{-- TODO: Poner bonito el no data found --}}

@section('content')
    @component('_components.table')
        @slot('title')
            Usuarios
        @endslot
        @slot('p_content')
            Tabla que muestra los usuarios registrados hasta el momento.
        @endslot
        @slot('reference', 'user.create')
        @slot('create_something', '+ Registrar Usuario')

        @slot('content_head')
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de registro</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($people as $person)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $person->user->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->lastname }}</td>
                    <td>{{ $person->user->username }}</td>
                    <td>{{ $person->birthdate }}</td>
                    <td>{{ $person->birthplace }}</td>
                    <td></td>
                    <td>{{ $person->user->phone }}</td>
                    <td>{{ $person->user->email }}</td>
                    <td>{{ $person->user->up_date }}</td>
                    <td>
                        <a href="{{ route('user.edit', $person->id) }}"
                            class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $person->user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent
@endsection


@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                        form.submit(); // Enviar el formulario si se confirma
                    }
                });
            });
        });
    </script>

@endsection
