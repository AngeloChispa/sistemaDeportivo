@extends('layouts.admin_view')

@section('title', 'Rols table')

@section('content')
    @component('_components.table')
        @slot('title')
            Roles
        @endslot
        @slot('p_content')
            Tabla que muestra los roles que se pueden aplicar a los usuarios.
        @endslot
        @slot('reference', 'rols.create')
        @slot('create_something', 'Registrar Rol')

        @slot('content_head')
            <tr>
                @empty($rols)
                    <th>No data</th>
                @else
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <th colspan="3">Acción</th>
                        @endif
                    @endauth
                @endempty
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($rols as $rol)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->name }}</td>
                    <td>{{ $rol->description }}</td>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <a href="{{route("rols.edit", $rol->id)}}"
                                    class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('rols.destroy', $rol->id) }}" method="POST" class="inline formulario-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                                </form>
                            </td>
                        @endif
                    @endauth
                </tr>
            @empty
                <p>No existen roles</p>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
