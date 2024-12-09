@extends('layouts.admin_view')

@section('title', 'Teams table')

@section('content')
    {{-- Tabla deportes --}}
    @component('_components.table')
        @slot('title')
            Deportes
        @endslot
        @slot('p_content')
            Tabla que muestra los deportes registrados hasta el momento.
        @endslot
        @slot('reference', 'sport.create')
        @slot('create_something', 'Registrar deporte')

        @slot('content_head')
            @empty($sports)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="2">Acción</th>
                </tr>
            @endempty
        @endslot
        @slot('content_body')
            @forelse ($sports as $sport)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td>{{$sport->id}}</td>
                    <td>{{$sport->name}}</td>
                    <td>{{$sport->description}}</td>
                    <td>
                        <a href="{{route('sport.edit', $sport->id)}}" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('sport.destroy', $sport->id)}}" method="POST" class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
