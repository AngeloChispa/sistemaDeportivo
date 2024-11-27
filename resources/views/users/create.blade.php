@extends('layouts.admin_view')

@section('title', 'Registrar usuario')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Usuario
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="{{route('user.store')}}"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputCreate')
                @slot('for','name')
                @slot('content','Nombre: ')
                @slot('type','text')
                @slot('name','name')
                @slot('id','name')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','lastname')
                @slot('content','Apellidos: ')
                @slot('type','text')
                @slot('name','lastname')
                @slot('id','lastname')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','username')
                @slot('content','Usuario: ')
                @slot('type','text')
                @slot('name','username')
                @slot('id','username')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','date_birth')
                @slot('content','Fecha de nacimiento: ')
                @slot('type','date')
                @slot('name','birthdate')
                @slot('id','date_birth')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','phone')
                @slot('content','Teléfono: ')
                @slot('type','number')
                @slot('name','phone')
                @slot('id','phone')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','email')
                @slot('content','Correo: ')
                @slot('type','email')
                @slot('name','email')
                @slot('id','email')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','password')
                @slot('content','Contraseña: ')
                @slot('type','password')
                @slot('name','password')
                @slot('id','password')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for','confirmPassword')
                @slot('content','Confirmar contraseña: ')
                @slot('type','password')
                @slot('name','confirmPassword')
                @slot('id','confirmPassword')
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('user.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
