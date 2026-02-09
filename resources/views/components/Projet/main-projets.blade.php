@props(['projets'])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    @foreach ($projets as $projet)
        <div
            class="project-card group bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 opacity-0 scale-95 animate-[scaleIn_250ms_ease-out_forwards]">
            <div class="relative aspect-video overflow-hidden">
                <div class="w-full h-full bg-cover bg-center bg-slate-100" data-alt="{{ $projet->nom }}"
                    style="background-image: url('{{ asset('storage/' . $projet->image_couverture) }}');">
                </div>
                <div
                    class="hover-overlay absolute inset-0 bg-slate-900/80 opacity-0 flex flex-col items-center justify-center gap-4 transition-opacity">
                    <button
                        class="w-48 py-2.5 bg-primary text-white rounded-lg font-bold flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-sm">visibility</span>
                        Voir le projet
                    </button>
                    <button
                        class="w-48 py-2.5 bg-white/10 text-white border border-white/20 hover:bg-white/20 rounded-lg font-bold flex items-center justify-center gap-2 backdrop-blur-sm">
                        <span class="material-symbols-outlined text-sm">code</span>
                        Voir le code
                    </button>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-slate-900 text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                    {{ $projet->nom }}
                </h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4 line-clamp-2">
                    {{ $projet->description }}
                </p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($projet->technologies as $techno)
                        <span
                            class="px-2.5 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold uppercase tracking-wider rounded">{{ $techno->nom }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
