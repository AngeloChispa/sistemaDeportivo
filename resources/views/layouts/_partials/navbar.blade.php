<nav class="fixed top-0 z-50 w-full bg-stone-900 text-white border-b border-stone-900">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            {{-- Logo y texto --}}
            <div class="flex items-center justify-start rtl:justify-end">
                <a href="{{ route('index') }}" class="flex ms-2 md:me-24">
                    <img src={{ asset('assets/img/logotipo.png') }} class="h-10 me-3" alt="Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Jogo
                        Bonito</span>
                </a>
            </div>

            {{-- Buscador --}}
            <div
                class="relative flex items-center bg-stone-800 p-1 px-4 rounded-full duration-200 w-[300px] rounded-lg border border-zinc-700 focus-within:ring focus-within:ring-red-500 hover:bg-stone-700 hover:border-zinc-500">

                <ion-icon name="search-outline" class="text-zinc-400 text-xl mr-2 duration-200 hover:text-zinc-200">
                </ion-icon>

                {{-- TODO: Cambiar esto por una petición POST o como gusten --}}
                <form action="{{ route('search.index') }}" method="GET">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="flex-1 h-6 border-0 text-zinc-400 bg-transparent rounded-md p-2 focus:outline-none placeholder:text-zinc-500 hover:placeholder:text-zinc-400"
                        placeholder="Buscar...">
                </form>
            </div>
            {{-- Usuario --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    @auth
                        <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                            <!-- Imagen del usuario -->
                            <button @click="open = !open" class="flex items-center focus:outline-none">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('assets/img/usuario_icon_default.png') }}"
                                    alt="user photo">
                            </button>

                            <!-- Menú desplegable -->
                            <div x-show="open" class="absolute right-0 z-50 mt-2 w-40 bg-stone-700 rounded-md shadow-lg"
                                x-transition>
                                <a href="{{ route('user.show', Auth::user()->people->id) }}"
                                    class="block px-4 py-2 text-sm text-zinc-300 rounded-md hover:bg-stone-800">
                                    Perfil
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-zinc-300 rounded-md hover:bg-stone-800">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        <p class="px-2">|</p>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</nav>
