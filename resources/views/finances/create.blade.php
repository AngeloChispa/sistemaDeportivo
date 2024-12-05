@extends('layouts.admin_view')

@section('title', 'Registrar Operación')

@section('content')
    <h1 class="text-4xl text-center">
        Registrar Operación
    </h1>
    <div class="flex items-center justify-center">
        <form method="POST" action="#"
            class="flex flex-col bg-stone-900 text-white p-6 rounded-lg shadow-lg w-full max-w-md space-y-4 mt-6">
            @csrf

            @component('_components.boxInputCreate')
                @slot('for', 'amount')
                @slot('content', 'Monto: ')
                @slot('type', 'number')
                @slot('name', 'amount')
                @slot('id', 'amount min=1 step=0.01')
            @endcomponent

            @component('_components.boxInputCreate')
                @slot('for', 'concept')
                @slot('content', 'Concepto: ')
                @slot('type', 'text')
                @slot('name', 'concept')
                @slot('id', 'concept')
            @endcomponent

            @component('_components.boxSelectInput')
                @slot('for', 'transaction_type')
                @slot('content', 'Tipo Transacción: ')
                @slot('name', 'transaction_type')
                @slot('id', 'transaction_type')
                @slot('more_options')
                    
                
                @endslot
            @endcomponent

            <div class="flex">
                <input type="submit" value="Crear"
                    class="m-2 w-full mt-4 bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 transition cursor-pointer" />
                <a href="{{ route('finances.index') }}"
                    class="m-2 text-center w-full mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition cursor-pointer">Cancelar</a>
            </div>
        </form>
    </div>
@endsection