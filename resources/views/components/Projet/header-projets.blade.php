@props(['technologies'])
<div class="mb-12">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
        <div class="max-w-2xl">
            <h1 class="text-slate-900 text-4xl font-extrabold tracking-tight mb-4">
                Galerie de Projets
            </h1>
            <p class="text-slate-600 text-lg">
                Une sélection soignée de modèles d’architecture, d’outils open-source et d’applications
                professionnelles que j’ai conçus de A à Z.
            </p>
        </div>
    </div>
    <div class="flex gap-2.5 flex-wrap">
        <button onclick="window.location='?techno='"
            class="px-5 py-2 rounded-full text-sm font-semibold transition-all
                {{ empty(request('techno')) ? 'bg-primary text-white shadow-md shadow-primary/20' : 'bg-white border border-slate-200 text-slate-600 hover:border-primary hover:text-primary' }}">
            Tous
        </button>
        @foreach ($technologies as $techno)
            <button onclick="window.location='?techno={{ $techno->nom }}'"
                class="px-5 py-2 rounded-full text-sm font-medium transition-all
                    {{ request('techno') === $techno->nom ? 'bg-primary text-white border-primary shadow-md shadow-primary/20' : 'bg-white border border-slate-200 text-slate-600 hover:border-primary hover:text-primary' }}">
                {{ $techno->nom }}
            </button>
        @endforeach
    </div>
</div>
