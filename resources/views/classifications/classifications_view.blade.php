@extends('layouts.admin_view')

@section('title', 'Users table')

@section('content')
    @component('_components.tableClassifications')
        @slot('title')
            Premier League
        @endslot
        {{-- @slot('p_content')
            Tabla que muestra los usuarios registrados hasta el momento.
        @endslot 
        @slot('reference', 'user.create')
        @slot('create_something', 'Registrar Usuario') --}}

        @slot('content_head')
            {{-- @empty($people)
                <th>Tabla vacía</th>
            @else --}}
            <tr>
                <th colspan="2" class="w-5 text-left pl-5">Equipo</th>
                <th class="w-24">PJ</th>
                <th class="w-24 ">G</th>
                <th class="w-24 ">E</th>
                <th class="w-24 ">P</th>
                <th class="w-24 ">GF</th>
                <th class="w-24 ">GC</th>
                <th class="w-24 ">DG</th>
                <th class="w-24 font-bold">Pts</th>
                {{-- <th colspan="3">Acción</th> --}}
            </tr>
            {{-- @endempty --}}
        @endslot
        @slot('content_body')
            {{-- @forelse ($people as $person)
                @if ($person->user)
                    <tr class="border-b border-stone-700 h-16">
                        <td>{{ $person->user->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->user->username }}</td>
                        <td>{{ $person->birthdate }}</td>
                        <td>{{ $person->birthplace }}</td>
                        <td></td>
                        <td>{{ $person->user->phone }}</td>
                        <td>{{ $person->user->email }}</td>
                        <td>{{ $person->user->up_date }}</td>
                        <td>
                            <a href="{{ route('user.edit', $person->id) }}"
                                class="font-medium text-zinc-200 bg-green-700 sm:rounded-lg p-2 hover:bg-green-900">Ver</a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $person->user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-zinc-200 bg-rose-600 sm:rounded-lg p-2 hover:bg-red-900 formulario-eliminar">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse --}}
            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">

                <td style="width: 50px;" class="hover:bg-transparent">1</td>
                <td class="text-left hover:bg-transparent">Liverpool</td>
                <td class="">12</td>
                <td class="">10</td>
                <td class="">1</td>
                <td class="">1</td>
                <td class="">24</td>
                <td class="">8</td>
                <td class="">16</td>
                <td class=" font-black">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">2</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td class="">50</td>
                <td class="">2</td>
                <td class="">0</td>
                <td class="">1</td>
                <td class="">30</td>
                <td class="">10</td>
                <td class="">24</td>
                <td class=" font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">3</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td class="">25</td>
                <td class="">100</td>
                <td class="">15</td>
                <td class="">2</td>
                <td class="">55</td>
                <td class="">3</td>
                <td class="">13</td>
                <td class="font-bold">67</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">1</td>
                <td class="text-left">Liverpool</td>
                <td class="">12</td>
                <td class="">10</td>
                <td class="">1</td>
                <td class="">1</td>
                <td class="">24</td>
                <td class="">8</td>
                <td class="">16</td>
                <td class=" font-bold">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">2</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td class="">50</td>
                <td class="">2</td>
                <td class="">0</td>
                <td class="">1</td>
                <td class="">30</td>
                <td class="">10</td>
                <td class="">24</td>
                <td class=" font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">3</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td class="">25</td>
                <td class="">100</td>
                <td class="">15</td>
                <td class="">2</td>
                <td class="">55</td>
                <td class="">3</td>
                <td class="">13</td>
                <td class="font-bold">67</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">1</td>
                <td class="text-left">Liverpool</td>
                <td class="">12</td>
                <td class="">10</td>
                <td class="">1</td>
                <td class="">1</td>
                <td class="">24</td>
                <td class="">8</td>
                <td class="">16</td>
                <td class=" font-bold">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">2</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td class="">50</td>
                <td class="">2</td>
                <td class="">0</td>
                <td class="">1</td>
                <td class="">30</td>
                <td class="">10</td>
                <td class="">24</td>
                <td class=" font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;" class="">3</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td class="">25</td>
                <td class="">100</td>
                <td class="">15</td>
                <td class="">2</td>
                <td class="">55</td>
                <td class="">3</td>
                <td class="">13</td>
                <td class="font-bold">67</td>
            </tr>
        @endslot
    @endcomponent

@endsection

@section('scripts')
    @component('_components.swal')
    @endcomponent

@endsection
