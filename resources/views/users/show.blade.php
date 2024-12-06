@extends('layouts.admin_view')

@section('title', 'User')

@section('content')
    <div class="flex flex-1">
        <div class="container flex flex-col lg:flex-row w-full px-6 py-6 gap-6">
            <div class="info-container flex-1 flex flex-col gap-6">
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información Personal</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Nombre: </strong>{{$person->name}}</li>
                        <li><strong>Fecha de nacimiento: </strong>{{$person->birthdate}}</li>
                        <li><strong>Lugar de nacimiento: </strong>{{$person->birthplace}}</li>
                        <li><strong>Nacionalidad: </strong>{{$person->birthplace}}</li>
                        <li><strong>Teléfono: </strong>{{$person->user->phone}}</li>
                    </ul>
                </div>
                <div class="stats bg-stone-800 rounded-lg shadow-md p-6">
                    <h5 class="text-lg text-red-500 font-semibold mb-4">Información general</h5>
                    <ul class="text-sm space-y-2">
                        <li><strong>Id: </strong>{{$person->user->id}}</li>
                        <li><strong>Username: </strong>{{$person->user->username}}</li>
                        <li><strong>Correo: </strong>{{$person->user->email}}</li>
                        <li><strong>Fecha de registro:</strong>{{$person->user->up_date}}</li>
                    </ul>
                </div>
            </div>
            <div class="profile-card bg-stone-800 rounded-lg shadow-md p-6 text-center w-full lg:w-1/3">
                <img src="{{ asset('assets/img/usuario_icon_default.png') }}" alt="Foto de Juan Pérez"
                    class="w-30 h-30 rounded-full mx-auto mb-2">
                <p class="nombreUsuario text-xl text-red-500 font-bold uppercase">{{$person->user->username}}</p>
                <button action="{{route('user.edit', $person->id)}}" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 rounded-md mt-4">Editar
                    Perfil</button>
            </div>

        </div>
    </div>
@endsection
