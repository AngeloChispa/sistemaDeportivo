@extends('layouts.admin_view')

@section('title', 'Instalations Table')

@section('content')
    {{-- Componente de tabla reutilizable --}}
    @component('_components.table')
        @slot('title')
            Instalaciones
        @endslot
        @slot('p_content')
            Tabla que muestra las instalaciones registradas hasta el momento.
        @endslot
        @slot('reference', 'instalations.create')
        @slot('create_something', 'Crear instalación')

        @slot('content_head')
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Capacidad</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot

        @slot('content_body')
            @forelse ($instalations as $instalation)
                <tr class="border-b border-stone-700 h-16">
                    <td>{{ $instalation->id }}</td>
                    <td>{{ $instalation->name }}</td>
                    <td>
                        {{ $instalation->country }}
                    </td>
                    <td>{{ $instalation->state }}</td>
                    <td>{{ $instalation->city }}</td>
                    <td>{{ $instalation->capacity }}</td>
                    <td>
                        <a href="{{ route('instalations.edit', $instalation) }}"
                            class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('instalations.destroy', $instalation) }}" method="POST"
                            class="inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('instalations.show', $instalation) }}"
                            class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No hay instalaciones registradas aún.</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent

    @section('scripts')
        @include('layouts._partials.swal')
    @endsection
@endsection
