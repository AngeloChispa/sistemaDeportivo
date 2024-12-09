{{-- Esta venta de registro de usuarios es únicamente para Aficionados --}}
{{-- El registro de jugadores, entrenadores y árbitros se hará en sus respectivas vistas --}}
@extends('layouts.landing2', ['headers' => []])

@section('title', 'Registro')

@section('content')

    <style>
        .custom-input {
            color: #f60101;
            /* Cambia este código al color deseado */
        }
    </style>

    <!-- contenedor gris -->
    <div>
        <!-- Contenidor general-->
        <div >
            <!-- 1 -->
            <div class="flex flex-col justify-center items-center text-white">
                <h1 class="text-4xl mb-6 mt-4">¡CREA TU CUENTA Y ÚNETE A NOSOTROS!</h1>
                <p class="mb-3 text-sm">Completa tus datos para comenzar</p>
            </div>

            <div class="max-w-md mx-auto p-6 text-white bg-stone-900 rounded-lg shadow-md">
                <!-- 2 -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Nombre -->
                    <div class="mb-7">
                        <label for="name"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Nombre(s)</label>
                        <input type="text" name="name" id="name"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tu nombre..">
                    </div>

                    <!-- Apellidos -->
                    <div class="mb-7">
                        <label for="lastname"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Apellidos</label>
                        <input type="text" name="lastname" id="lastname"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tus apellidos..">
                    </div>

                    <div class="mb-7">
                        <label for="username"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Usuario</label>
                        <input type="text" name="username" id="username"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tus apellidos..">
                    </div>

                    <!-- Fecha de nacimiento -->
                    <div class="mb-7">
                        <label for="fecha-nac"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Fecha
                            de nacimiento</label>
                        <input type="date" name="birthdate" id="fecha-nac"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tu fecha de nacimiento..">
                    </div>

                    {{-- Lugar de nacimiento --}}
                    <div class="mb-7">
                        <label for='birthplace'
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Lugar de nacimiento</label>
                        <select name='birthplace' id='birthplace'
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <option value="">-</option>
                            <option value="1">Estados Unidos</option>
                            <option value="2">Canadá</option>
                            <option value="3">México</option>
                        </select>
                    </div>

                    <!-- telefono -->
                    <div class="mb-7">
                        <label for="phone"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Teléfono</label>
                        <input type="tel" name="phone" id="phone"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tu número de teléfono..">
                    </div>

                    <!-- Email -->
                    <div class="mb-7">
                        <label for="email"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tu correo electrónico..">
                    </div>

                    <!-- contraseña -->
                    <div class="mb-7">
                        <label for="password"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Contraseña</label>
                        <input type="password" name="password" id="password"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Introduce tu contraseña..">
                    </div>

                    <!-- conf contraseña -->
                    <div class="mb-7">
                        <label for="confirm-password"
                            class="block text-sm font-semibold text-stone-200 after:content-['*'] after:ml-0.5 after:text-red-500">Confirmar
                            contraseña</label>
                        <input type="password" name="password_confirmation" id="confirm-password"
                            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            placeholder="Confirma tu contraseña..">
                    </div>

                    <!-- 3 -->
                    <button type="submit"
                        class="w-full bg-red-700 text-white py-3 rounded-md hover:bg-blue-700 text-lg font-semibold duration-200">Registrarse</button>

                    <!-- 4 -->
                    <p class="mt-4 text-center mb-14">¿Ya tienes cuenta? <a href="{{ route('login') }}"
                            class="text-red-700 hover:underline">Inicia sesión aquí</a></p>
                </form>
            </div>
        </div>

    @endsection
