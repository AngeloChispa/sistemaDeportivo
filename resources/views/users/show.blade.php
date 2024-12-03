@extends('layouts.admin_view')

@section('title', 'User')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información Personal</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Nombre: </strong>Nombre completo con apellidos</li>
                        <li><strong>Fecha de nacimiento: </strong>10/10/2010</li>
                        <li><strong>Lugar de nacimiento: </strong>usuario lugar nacimiento</li>
                        <li><strong>Nacionalidad: </strong>usurio nacionalidad</li>
                        <li><strong>Teléfono: </strong>834776112</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información general</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Id: </strong>idUsuario</li>
                        <li><strong>Username: </strong>nomreUsuario</li>
                        <li><strong>Correo: </strong>correo@usuario.ejemplo.me</li>
                        <li><strong>Fecha de registro:</strong>fecha de registro</li>
                    </ul>
                </div>
            </div>
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Foto de Juan Pérez"
                    class="w-30 h-30 rounded-full mx-auto mb-2">
                <p class="nombreUsuario text-xl text-red-500 font-bold uppercase">Username</p>
                <button class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 rounded-md mt-4">Editar
                    Perfil</button>
            </div>

        </div>
    </div>
@endsection
