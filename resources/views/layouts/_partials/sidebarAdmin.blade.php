{{-- Sidebar --}}
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-stone-900 text-white">
        <ul class="space-y-2 font-medium">
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Index')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Seguridad & Auditoría')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'rols.index')
                    @slot('name', 'Roles')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'users.index')
                    @slot('name', 'Usuarios')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'tournaments.index')
                    @slot('name', 'Torneos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'players.index')
                    @slot('name', 'Jugadores')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'teams.index')
                    @slot('name', 'Equipos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Partidos')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Estadísticas & Reportes')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Clasificación')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Comunicación')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Instalaciones')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Patrocinadores')
                @endcomponent
            </li>
            <li>
                @component('_components.boxSidebar ')
                    @slot('icon', '')
                    @slot('reference', 'index')
                    @slot('name', 'Finanzas')
                @endcomponent
            </li>
        </ul>
    </div>
</aside>
