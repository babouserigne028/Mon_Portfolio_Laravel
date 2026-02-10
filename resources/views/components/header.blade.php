@props(['nom'])
<header class="fixed top-0 z-50 w-full border-b border-slate-200/60 bg-white/80 backdrop-blur-md px-6 py-4">
    <div class="flex items-center justify-between mx-auto">
        <!-- Logo -->
        <div class="flex items-center gap-2 group cursor-pointer" onclick="window.location.href='{{ route('acceuil') }}'">
            <div class="p-1.5 bg-primary rounded-lg text-white">
                <span class="material-symbols-outlined block">terminal</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 leading-none">
                Kingston<span class="text-primary">.{{ $nom }}</span>
            </h2>
        </div>

        <!-- Navigation Desktop -->
        <nav class="hidden md:flex items-center gap-10">
            <a class="text-sm font-bold transition-colors {{ request()->routeIs('acceuil') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                href="{{ route('acceuil') }}">Accueil</a>
            <a class="text-sm font-bold transition-colors {{ request()->routeIs('projets') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                href="{{ route('projets') }}">Projets</a>
            <a class="text-sm font-bold transition-colors {{ request()->routeIs('a_propos') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                href="{{ route('a_propos') }}">À propos</a>
            <a class="text-sm font-bold transition-colors {{ request()->routeIs('contact') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                href="{{ route('contact') }}">Contacte</a>
        </nav>

        <!-- Actions Desktop -->
        <div class="flex items-center gap-3">
            <!-- Nouveau bouton Admin -->
            <a href="{{ route('login') }}" 
                class="hidden sm:flex items-center justify-center rounded-lg border border-slate-200 px-5 py-2.5 text-sm font-bold text-slate-600 hover:bg-slate-50 hover:border-slate-300 transition-all active:scale-95">
                <span class="material-symbols-outlined text-sm mr-2">admin_panel_settings</span>
                Admin
            </a>

            <!-- Bouton Contact -->
            <button onclick="window.location.href='{{ route('contact') }}'"
                class="hidden sm:flex items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-primary/90 transition-all active:scale-95">
                Contactez-Moi
            </button>

            <!-- Menu mobile toggle -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="p-2 rounded-lg text-primary focus:outline-none"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        <!-- Menu mobile dropdown -->
        <div id="mobile-menu"
            class="md:hidden absolute top-16 left-0 w-full bg-white border-b border-slate-200/60 shadow-lg hidden z-50">
            <div class="flex flex-col items-center gap-4 py-4">
                <a class="text-sm font-bold transition-colors {{ request()->routeIs('acceuil') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                    href="{{ route('acceuil') }}">Accueil</a>
                <a class="text-sm font-bold transition-colors {{ request()->routeIs('projets') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                    href="{{ route('projets') }}">Projets</a>
                <a class="text-sm font-bold transition-colors {{ request()->routeIs('a_propos') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                    href="{{ route('a_propos') }}">À propos</a>
                <a class="text-sm font-bold transition-colors {{ request()->routeIs('contact') ? 'text-primary' : 'text-slate-600 hover:text-primary' }}"
                    href="{{ route('contact') }}">Contacte</a>
                <hr class="w-full border-slate-100">
                <a href="{{ route('login') }}" class="text-sm font-bold text-slate-600">Administration</a>
            </div>
        </div>
    </div>
</header>