@extends('layouts.admin_view')

@section('title', 'Player table')

@section('content')
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

                @if ($person->player)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{$person->id}}</td>
                    <td>{{$person->player->id}}</td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->lastname}}</td>
                    <td>{{$person->birthdate}}</td>
                    <td>
                        @foreach ($nationalities as $nationality)
                            @if ($person->birthplace == $nationality->id)
                                {{ $national = $nationality->country }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($nationalities as $nationality)
                            @if ($person->birthplace == $nationality->id)
                                {{ $nationality->country }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$person->player->height}}</td>
                    <td>
                        @switch($person->player->bestSide)
                            @case(1)
                                Izquierdo
                                @break
                            @case(2)
                                Derecho
                                @break
                            @default No tiene piernas D:
                        @endswitch
                    </td>
                    <td>
                        <a href="{{route('players.edit', $person->player->id) }}" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('players.destroy', $person->player->id) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                    </td>
                </tr>
                @endif
            @empty
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
