@extends('layouts.admin_view')

@section('title', 'Sponsors table')

@section('content')
    {{-- Tabla de ejemplo, con estilos --}}
    @component('_components.table')
        @slot('title')
            patrocinadores
        @endslot
        @slot('p_content')
        Tabla que muestra los patrocinadores registrados hasta el momento.
        @endslot
        @slot('reference','patrocinadores.create')
        @slot('create_something','Registrar Patrocinador')

        @slot('content_head')
            {{-- @empty($sponsors)
                <tr>
                    <th>No data</th>
                </tr>
            @else
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Localización</th>
                    <th>Tipo de patrocinio</th>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <th colspan="3">Acción</th>
                        @endif
                    @endauth
                </tr>
            @endempty --}}
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Localización</th>
                <th>Tipo de patrocinio</th>
                <th colspan="3">Acción</th>
            </tr>
        @endslot
        @slot('content_body')
            {{-- @forelse ($sponsors as $sponsor)
                <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    @auth
                        @if (Auth::user()->rol_id === 1)
                            <td>
                                <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                            </td>
                            <td>
                                <form action="#" method="POST" class="inline formulario-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium bg-red-500 sm:rounded-lg p-2 hover:bg-red-600">Borrar</button>
                                </form>
                            </td>
                            <td>
                                <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                            </td>
                        @endif
                    @endauth
                </tr>
            @empty
                <tr>
                    <td class="text-center">No hay equipos registrados aún.</td>
                </tr>
            @endforelse --}}
                
            <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                <td>1</td>
                <td>Adidas</td>
                <td>834 191 1999</td>
                <td>patrocinador@ejemplo.com.mx</td>
                <td>Calle las palmas Av.Caballero Cd.Victoria</td>
                <td>Por equipo</td>
                <td>
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <form action="#" method="POST" class="inline formulario-eliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900">
                            Borrar
                        </button>
                    </form>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                <td>2</td>
                <td>Adidas</td>
                <td>834 191 1999</td>
                <td>patrocinador@ejemplo.com.mx</td>
                <td>Calle las palmas Av.Caballero Cd.Victoria</td>
                <td>Por equipo</td>
                <td>
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>
            <tr class="border-b border-stone-700 h-16 hover:bg-stone-800">
                <td>3</td>
                <td>Adidas</td>
                <td>834 191 1999</td>
                <td>patrocinador@ejemplo.com.mx</td>
                <td>Calle las palmas Av.Caballero Cd.Victoria</td>
                <td>Por equipo</td>
                <td>
                    <a href="#" class="font-medium bg-blue-500 sm:rounded-lg p-2 hover:bg-blue-600">Editar</a>
                </td>
                <td>
                    <a href="#" class="font-medium text-zinc-300 bg-red-500 sm:rounded-lg p-2 hover:bg-red-600 formulario-eliminar">Borrar</a>
                </td>
                <td>
                    <a href="#" class="font-medium bg-green-500 sm:rounded-lg p-2 hover:bg-green-600">Ver</a>
                </td>
            </tr>
        @endslot
    @endcomponent

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
            
            eliminarBtn.addEventListener('click', function(event) {
                
                event.preventDefault();

                // SweetAlert2
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-5",
                        cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
                },
                buttonsStyling: true
                });
                swalWithBootstrapButtons.fire({
                title: "¿Estás seguro?",
                text: "¡No podrás ser capaz de revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "¡Si, eliminalo!",
                cancelButtonText: "¡No, cancelalo!",
                reverseButtons: false,
                background: '#38322e',
                color: '#d4d4d8'
                }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                    title: "¡Eliminado!",
                    text: "El elemento ha sido eliminado.",
                    icon: "success",
                    background: '#38322e',
                    color: '#d4d4d8'
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "Proceso cancelado :)",
                    icon: "error",
                    background: '#38322e',
                    color: '#d4d4d8'
                    });
                }
                });
            });
        });
    </script>
    
@endsection
