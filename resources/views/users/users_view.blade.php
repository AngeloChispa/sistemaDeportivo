@extends('layouts.admin_view')

@section('title', 'Users table')

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
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Fecha de Registro</th>
                <th colspan="2">Acción</th>
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
                    <a href="{{route('user.edit', $user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td>
                    <a href="{{route('user.destroy', $user->id)}}" class="font-medium text-red-500 hover:underline">Borrar</a>
                </td>
            </tr> 
            @empty
                <h1>No data found</h1>
            @endforelse
        @endslot
    @endcomponent
@endsection
