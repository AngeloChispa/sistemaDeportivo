{{-- Sidebar --}}
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-stone-900 text-white">
        <ul class="space-y-2 font-medium">
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="home" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'index')
                    @slot('name', 'Index')
                @endcomponent
            </li>
            @auth
                @if (Auth::user()->rol_id === 1)
                    <li>
                        @component('_components.boxSidebar ')
                            @slot('icon')
                                <ion-icon name="key" class="h-5 w-5"></ion-icon>
                            @endslot
                            @slot('reference', 'ascend.index')
                            @slot('name', 'Ascender usuarios')
                        @endcomponent
                    </li>
                @endif
            @endauth
            @auth
                @if (Auth::user()->rol_id === 1)
                    <li>
                        @component('_components.boxSidebar ')
                            @slot('icon')
                                <ion-icon name="id-card" class="h-5 w-5"></ion-icon>
                            @endslot
                            @slot('reference', 'rols.index')
                            @slot('name', 'Roles')
                        @endcomponent
                    </li>
                @endif
            @endauth
            @auth
                @if (Auth::user()->rol_id === 1)
                    <li>
                        @component('_components.boxSidebar ')
                            @slot('icon')
                                <ion-icon name="people" class="h-5 w-5"></ion-icon>
                            @endslot
                            @slot('reference', 'user.index')
                            @slot('name', 'Usuarios')
                        @endcomponent
                    </li>
                @endif
            @endauth
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="american-football-outline" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'sport.index')
                    @slot('name', 'Deportes')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="trophy" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'tournaments.index')
                    @slot('name', 'Torneos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="shirt" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'players.index')
                    @slot('name', 'Jugadores')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="basketball-outline" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'trainers.index')
                    @slot('name', 'Entrenadores')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="people-circle-outline" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'referees.index')
                    @slot('name', 'Árbitros')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="shield-half" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'teams.index')
                    @slot('name', 'Equipos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="football" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'games.index')
                    @slot('name', 'Partidos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="bar-chart" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'reports.index')
                    @slot('name', 'Estadísticas & Reportes')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="podium" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'classifications.index')
                    @slot('name', 'Clasificación')
                @endcomponent
            </li>
            {{-- <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="notifications" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'index')
                    @slot('name', 'Comunicación')
                @endcomponent
            </li> --}}
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon')
                        <ion-icon name="business" class="h-5 w-5"></ion-icon>
                    @endslot
                    @slot('reference', 'instalations.index')
                    @slot('name', 'Instalaciones')
                @endcomponent
            </li>
            @auth
                @if (Auth::user()->rol_id === 1)
                    <li>
                        @component('_components.boxSidebar ')
                            @slot('icon')
                                <ion-icon name="card" class="h-5 w-5"></ion-icon>
                            @endslot
                            @slot('reference', 'patrocinadores.index')
                            @slot('name', 'Patrocinadores')
                        @endcomponent
                    </li>
                @endif
            @endauth
            @auth
                @if (Auth::user()->rol_id === 1)
                    <li>
                        @component('_components.boxSidebar ')
                            @slot('icon')
                                <ion-icon name="wallet" class="h-5 w-5"></ion-icon>
                            @endslot
                            @slot('reference', 'finances.index')
                            @slot('name', 'Finanzas')
                        @endcomponent
                    </li>
                @endif
            @endauth
        </ul>
    </div>
</aside>
