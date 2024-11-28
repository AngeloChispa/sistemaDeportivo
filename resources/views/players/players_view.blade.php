@extends('layouts.admin_view')

@section('title', 'Rols table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            Jugadores
        @endslot
        @slot('p_content')
            Tabla que muestra aquellos usuarios que se les ha asignado el rol de jugador.
        @endslot
        @slot('reference', 'players.create')
        @slot('create_something', 'Crear Jugador')

        {{-- @forelse ($players as $player)

        @empty

        @endforelse
         --}}
        @slot('content_head')
            <tr>
                <th>id</th>
                <th>ID del Jugador</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Estado</th>
                <th>Altura</th>
                <th>Lado dominante</th>
                <th>Fecha de registro</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($people as $person)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{$person->id}}</td>
                    <!--Verificar que no haya null -->
                    <td>
                        @if ($person->player)
                        {{$person->player->id}}
                        @else
                        Sin jugador aun
                        @endif
                        </td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->lastname}}</td>
                    <td>{{$person->birthdate}}</td>
                    <td>{{$person->birthplace}}</td>
                    <td>{{$person->birthplace}}</td>
                    <!--Verificar que no haya null -->
                    <td>
                        @if ($person->player)
                        {{$person->player->height}}
                        @else
                        Sin altura aun
                        @endif
                    </td>
                    <!--Verificar que no haya null -->
                    <td>
                        @if ($person->player)
                        {{$person->player->bestSide}}
                        @else
                        SIN DATOS
                        @endif
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                    </td>
                    <td>
                        <a href="#"
                            class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">Borrar</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                    </td>
                </tr>
            @empty
            @endforelse
        @endslot
    @endcomponent

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            eliminarBtn.addEventListener('click', function(event) {

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
