<header class="fixed top-0 z-50 w-full border-b border-slate-200/60 bg-white/80 backdrop-blur-md px-6 py-4">
    <div class="flex items-center justify-between mx-auto">
        <div class="flex items-center gap-2 group cursor-pointer">
            <div class="p-1.5 bg-primary rounded-lg text-white">
                <span class="material-symbols-outlined block">terminal</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 leading-none">
                Dar<span class="text-primary">.dev</span>
            </h2>
        </div>
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
        <div class="flex items-center gap-4">
            <button onclick="window.location.href='{{ route('contact') }}'"
                class="hidden sm:flex items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-primary/90 transition-all active:scale-95">
                Contactez-Moi
            </button>
        </div>
    </div>
</header>
