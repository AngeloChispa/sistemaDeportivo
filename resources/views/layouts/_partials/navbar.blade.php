{{-- Navbar --}}
<div class="ml-52">
    <div class="relative bg-stone-900 text-white p-4">
        <div class="flex justify-center">
            <div class="bg-zinc-700 hover:bg-zinc-600 p-1 px-44 rounded-full duration-200">
                <div class="text-slate-300 left-0.5 text-sm tracking-wider opacity-45">Buscar...</div>
            </div>
        </div>
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 p-1 rounded-full flex items-center justify-center">
            <img src="{{asset('assets/img/usuario_icon_default.png')}}" alt="">
        </div>
    </div>

    @yield('content')
</div>