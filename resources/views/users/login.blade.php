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

    <!-- Contenidor general-->
    <div class="">

        <!-- 1 -->
        <div class="flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl mb-6 mt-20">BIENVENIDO! 👋</h1>
            <p class="mb-3 text-sm">Ingresa tu información para acceder</p>
        </div>
        
        <!-- Email a Registrate aqui -->
        <div class="max-w-md mx-auto p-6 text-white rounded-lg shadow-md">

            <!-- 2 -->
            <form method="POST">
                <!-- email -->
                <div class="mb-10">
                    <label for="correo" class="block text-base font-medium mb-5 ml-2">Email</label>
                    <input type="email" id="correo" name="email" required class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu email..">
                </div>
                <!-- contraseña -->
                <div class="mb-10">
                    <label for="contrasena" class="block text-base font-medium mb-5 ml-2">Contraseña</label>
                    <input type="password" id="contrasena" name="password" required class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 mb-10 bg-transparent border-slate-600" placeholder="Introduce tu contraseña..">
                </div>
        
                <!-- 3 -->
                <button type="submit" class="w-full bg-red-700 text-white py-3 rounded-md hover:bg-blue-700 text-lg font-semibold duration-200">Iniciar Sesión</button>
                
                <!-- 4 -->
                <p class="mt-4 text-center">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-red-700 hover:underline">Regístrate aquí</a></p>
            </form>

        </div>

    </div>

@endsection