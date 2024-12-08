@extends('layouts.landing2', ['headers'=>[]])

@section('title', 'Login')

@section('content')

<style>
    .custom-input {
        background-color: #1a1a1a; /* Color oscuro para el fondo */
    }

    .custom-input:focus {
        background-color: #0f67ff; /* Color de fondo al enfocar */
    }
</style>

<div class="flex justify-between">

    <!-- Contenedor login-->
    <div class="flex justify-end items-start h-screen">

        <!-- imagen -->
        <img src="{{ asset('assets/img/login_img3.jpg')}}" class="h-full w-4/5" alt="">

        <!-- Contenedor de contenido -->
        <div class="w-full max-w-2xl text-white shadow-md mt-24 pl-32 pr-32">
        
            <!-- Encabezado -->
            <div class="flex flex-col justify-center items-center text-white">
                <h1 class="text-4xl mb-6 mt-4">BIENVENIDO! 👋</h1>
                <p class="mb-3 text-sm">Ingresa tu información para acceder</p>
            </div>
            
            <!-- Formulario -->
            <div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <!-- Email -->
                    <div class="mb-10">
                        <label for="correo" class="block text-base font-medium mb-5 ml-2">Email</label>
                        <input type="email" id="correo" name="email" required class="mt-1 block w-96 h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu email..">
                    </div>
                    <!-- Contraseña -->
                    <div class="mb-10">
                        <label for="contrasena" class="block text-base font-medium mb-5 ml-2">Contraseña</label>
                        <input type="password" id="contrasena" name="password" required class="mt-1 block w-96 h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 mb-10 bg-transparent border-slate-600" placeholder="Introduce tu contraseña..">
                    </div>

                    <!-- 3 -->
                    <button type="submit" class="w-96 bg-red-700 text-white py-3 rounded-md hover:bg-blue-700 text-lg font-semibold duration-200">Iniciar Sesión</button>
                    
                    <!-- 4 -->
                    <p class="mt-4 text-center">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-red-700 hover:underline">Regístrate aquí</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
