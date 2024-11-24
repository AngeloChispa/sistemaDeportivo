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
        @slot('create_something', '+ Crear Rol')

        @slot('content_head')
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th colspan="2">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            @forelse ($rols as $rol)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{$rol->id}}</td>
                    <td>{{$rol->name}}</td>
                    <td class="text-center">{{$rol->description}}</td>
                    <td>
                        <a href="{{route('rols.edit', $rol->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                    <td>
                        <a href="#" class="font-medium text-red-500 hover:underline">Borrar</a>
                    </td>
                </tr>
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent
@endsection
