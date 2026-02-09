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
            class="px-5 py-2 rounded-full bg-primary text-white text-sm font-semibold shadow-md shadow-primary/20">
            Tous
        </button>
        @foreach ($technologies as $techno)
            <button onclick="window.location='?techno={{ $techno->nom }}'"
                class="px-5 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:border-primary hover:text-primary transition-all">
                {{ $techno->nom }}
            </button>
        @endforeach
    </div>
</div>
