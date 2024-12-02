<nav class="fixed top-0 z-50 w-full bg-stone-900 text-white border-b border-stone-900">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            {{-- Logo y texto --}}
            <div class="flex items-center justify-start rtl:justify-end">
                <a href="{{ route('index') }}" class="flex ms-2 md:me-24">
                    <img src={{ asset('assets/img/logotipo.png') }} class="h-10 me-3" alt="Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Elite Champs</span>
                </a>
            </div>

            {{-- Buscador --}}
            <div
                class="relative flex items-center bg-stone-800 p-1 px-4 rounded-full duration-200 w-[300px] rounded-lg border border-zinc-700 focus-within:ring focus-within:ring-red-500 hover:bg-stone-700 hover:border-zinc-500">

                <ion-icon name="search-outline"
                    class="text-zinc-400 text-xl mr-2 duration-200 hover:text-zinc-200"></ion-icon>

                <input
                    class="flex-1 h-6 border-0 text-zinc-400 bg-transparent rounded-md p-2 focus:outline-none placeholder:text-zinc-500 hover:placeholder:text-zinc-400"
                    placeholder="Buscar...">
            </div>

            {{-- Usuario --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                            alt="user photo">

                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</nav>
