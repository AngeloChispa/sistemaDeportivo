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
                    <th colspan="3">Acción</th>
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
                    <td>
                        <a href="#" class="font-medium text-zinc-200 bg-blue-700 sm:rounded-lg p-2 hover:bg-blue-900">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('rols.destroy', $rol->id) }}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
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
