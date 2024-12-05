@extends('layouts.admin_view')

@section('title', 'Classifications table')

@section('content')
    @component('_components.tableClassifications')
        @slot('title')
            Premier League
        @endslot

        @slot('content_head')
            <tr>
                <th colspan="2" class="w-5 text-left pl-5">Equipo</th>
                <th class="w-24">PJ</th>
                <th class="w-24 ">G</th>
                <th class="w-24 ">E</th>
                <th class="w-24 ">P</th>
                <th class="w-24 ">GF</th>
                <th class="w-24 ">GC</th>
                <th class="w-24 ">DG</th>
                <th class="w-24font-bold">Pts</th>
            </tr>
        @endslot
        @slot('content_body')
            {{-- @forelse ($people as $person)
                <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                    <td style="width: 50px;" class="hover:bg-transparent"></td>
                    <td class="text-left hover:bg-transparent"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="font-black"></td>
                </tr>
            @empty
                <tr>
                    <td>No data found</td>
                </tr>
            @endforelse --}}
            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">

                <td style="width: 50px;" class="hover:bg-transparent">1</td>
                <td class="text-left hover:bg-transparent">Liverpool</td>
                <td>12</td>
                <td>10</td>
                <td>1</td>
                <td>1</td>
                <td>24</td>
                <td>8</td>
                <td>16</td>
                <td class=" font-black">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">2</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td>50</td>
                <td>2</td>
                <td>0</td>
                <td>1</td>
                <td>30</td>
                <td>10</td>
                <td>24</td>
                <td class="font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">3</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td>25</td>
                <td>100</td>
                <td>15</td>
                <td>2</td>
                <td>55</td>
                <td>3</td>
                <td>13</td>
                <td class="font-bold">67</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">4</td>
                <td class="text-left">Liverpool</td>
                <td>12</td>
                <td>10</td>
                <td>1</td>
                <td>1</td>
                <td>24</td>
                <td>8</td>
                <td>16</td>
                <td class="font-bold">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">5</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td>50</td>
                <td>2</td>
                <td>0</td>
                <td>1</td>
                <td>30</td>
                <td>10</td>
                <td>24</td>
                <td class="font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">6</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td>25</td>
                <td>100</td>
                <td>15</td>
                <td>2</td>
                <td>55</td>
                <td>3</td>
                <td>13</td>
                <td class="font-bold">67</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">7</td>
                <td class="text-left">Liverpool</td>
                <td>12</td>
                <td>10</td>
                <td>1</td>
                <td>1</td>
                <td>24</td>
                <td>8</td>
                <td>16</td>
                <td class="font-bold">31</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">8</td>
                <td class="text-left">Los tiburones rojos de irapuato</td>
                <td>50</td>
                <td>2</td>
                <td>0</td>
                <td>1</td>
                <td>30</td>
                <td>10</td>
                <td>24</td>
                <td class="font-bold">62</td>
            </tr>

            <tr class="border-b border-stone-700 h-12 hover:bg-[#333333] text-base">
                <td style="width: 50px;">9</td>
                <td class="text-left">Los mermeladeros de tultepec</td>
                <td>25</td>
                <td>100</td>
                <td>15</td>
                <td>2</td>
                <td>55</td>
                <td>3</td>
                <td>13</td>
                <td class="font-bold">67</td>
            </tr>
        @endslot
    @endcomponent

@endsection

@section('scripts')
    @component('_components.swal')
@endsection
