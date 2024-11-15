@extends('layouts.landing2', ['headers'=>[]])

@section('title', 'Registro')

@section('content')

    <style>
    
    .custom-input {
    color: #f60101; /* Cambia este código al color deseado */
    }

    </style>
    <!-- Contenidor general-->
    <div class="">

        <!-- 1 -->
        <div  class="flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl mb-6 mt-20">¡CREA TU CUENTA Y ÚNETE A NOSOTROS!</h1>
            <p class="mb-3 text-sm">Completa tus datos para comenzar</p>
        </div>

        <div class="max-w-md mx-auto p-6 text-white rounded-lg shadow-md">
            <!-- 2 -->
            <form method="POST">

                <!-- Nombre -->
                <div class="mb-7">
                    <label for="name" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Nombre(s)</label>
                    <input type="text" id="name" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu nombre..">
                </div>

                <!-- Apellidos -->
                <div class="mb-7">
                    <label for="surname" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Apellidos</label>
                    <input type="text" id="surname" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tus apellidos..">
                </div>

                <!-- Fecha de nacimiento -->
                <div class="mb-7">
                    <label for="fecha-nac" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Fecha de nacimiento</label>
                    <input type="date" id="fecha-nac" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu fecha de nacimiento..">
                </div>

                <!-- telefono -->
                <div class="mb-7">
                    <label for="phone" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Teléfono</label>
                    <input type="tel" id="phone" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu número de teléfono..">
                </div>

                <!-- rol -->
                <div class="mb-7">
                    <label for="role" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Rol de usuario</label>
                    <select id="role" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600">
                        <option class="text-black">Selecciona tu rol..</option>
                        <option class="text-black">Entrenador</option>
                        <option class="text-black">Jugador</option>
                        <option class="text-black">Árbitro</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="mb-7">
                    <label for="email" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Email</label>
                    <input type="email" id="email" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu correo electrónico..">
                </div>

                <!-- contraseña -->
                <div class="mb-7">
                    <label for="password" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Contraseña</label>
                    <input type="password" id="password" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Introduce tu contraseña..">
                </div>

                <!-- conf contraseña -->
                <div class="mb-7">
                    <label for="confirm-password" class="block text-base font-medium mb-5 ml-2   after:content-['*'] after:ml-0.5 after:text-red-500">Confirmar contraseña</label>
                    <input type="password" id="confirm-password" class="mt-1 block w-full h-14 border text-slate-300 rounded-md p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-transparent border-slate-600" placeholder="Confirma tu contraseña..">
                </div>

                <!-- 3 -->
                <button type="submit" class="w-full bg-red-700 text-white py-3 rounded-md hover:bg-blue-700 text-lg font-semibold duration-200">Registrarse</button>
    
                <!-- 4 -->
                <p class="mt-4 text-center mb-14">¿Ya tienes cuenta?  <a href="{{ route('login') }}" class="text-red-700 hover:underline">Inicia sesión aquí</a></p>
            </form>
        </div>
    </div>    

@endsection