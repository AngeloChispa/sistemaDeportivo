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
        @slot('reference','user.create')
        @slot('create_something','+ Registrar Usuario')

        @slot('content_head')
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellidos</th>
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
            @forelse ($users as $user)
            <tr class="border-b border-stone-700 h-16">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->lastname}}</td>
                <td class="text-center">{{$user->date_birth}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td class="text-center">{{$user->up_date}}</td>
                <td>
                    <a href="{{route('user.edit', $user->id)}}"
                        class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="{{route('user.destroy', $user->id)}}" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
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
            eliminarBtn.addEventList formulario - eliminarener('click', function(event) {

                event.preventDefault();

                // SweetAlert2
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esta acción!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Si, eliminalo!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "¡Eliminado!",
                            text: "El jugador ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>

@endsection
