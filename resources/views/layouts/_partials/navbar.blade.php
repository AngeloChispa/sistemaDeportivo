{{-- Navbar --}}
<div class="ml-52">
    <div class="relative bg-stone-900 text-white p-2">
        <div class="flex justify-center">
            <div class="relative flex items-center bg-stone-800 p-1 px-4 rounded-full duration-200 w-[300px] rounded-lg border border-zinc-700 focus-within:ring focus-within:ring-red-500 hover:bg-stone-700 hover:border-zinc-500">
                
                <ion-icon name="search-outline" class="text-zinc-400 text-xl mr-2 duration-200 hover:text-zinc-200"></ion-icon>
                
                <input 
                    class="flex-1 h-6 border-0 text-zinc-400 bg-transparent rounded-md p-2 focus:outline-none placeholder:text-zinc-500 hover:placeholder:text-zinc-400"
                    placeholder="Buscar..." 
                >
            </div>
        </div>
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 p-1 rounded-full flex items-center justify-center duration-200 hover:opacity-80 hover:scale-105">
            <img src="{{asset('assets/img/usuario_icon_default.png')}}" alt="">
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @yield('content')
</div>
