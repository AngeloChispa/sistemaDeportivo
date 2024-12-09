@extends('layouts.admin_view')

@section('title', 'Editar usuario')

@section('content')
    <h1 class="text-4xl text-center">
        Editar Usuario
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{route('user.update', $person->user->id)}}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @method('PUT')
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-stone-200">Nombre:</label>
                <input type="text" name="name" id="name"  value="{{$person->name}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="lastname" class="block text-sm font-semibold text-stone-200">Apellidos:</label>
                <input type="text" name="lastname" id="lastname" value="{{$person->lastname}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="username" class="block text-sm font-semibold text-stone-200">Usuario:</label>
                <input type="text" name="username" id="username" value="{{$person->user->username}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="date_birth" class="block text-sm font-semibold text-stone-200">Fecha de nacimiento:</label>
                <input type="date" name="date_birth" id="date_birth" value="{{$person->birthdate}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            @component('_components.boxInputEdit')
            @slot('for', 'phone')
            @slot('content', 'Telefono:')
            @slot('type', 'tel')
            @slot('name', 'phone')
            @slot('id', 'phone')
            @slot('value', old('phone', $person->user->phone))
            @endcomponent

            <div>
                <label for="email" class="block text-sm font-semibold text-stone-200">Correo:</label>
                <input type="email" name="email" id="email" value="{{$person->user->email}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-stone-200">Contraseña:</label>
                <input type="password" name="password" id="password" value="{{$person->user->password}}"
                    class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div class="flex">
                <input type="submit" value="Guardar"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('user.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
