<style>
    thead tr th{
        background-color: #161616;
    }

    tbody tr td{
        background-color: #303135;
    }
    
</style>
<table class="w-full text-left border-separate border-spacing-0 text-white rounded-lg overflow-hidden">
    <thead>
        @yield('table-header')
    </thead>
    <tbody class="rows">
        @yield('table-rows')
    </tbody>
</table>
