@props(['projets'])
<section class="py-24 max-w-8xl mx-auto px-6 md:px-12">
    <div class="flex items-end justify-between mb-12">
        <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                Projets à la Une
            </h2>
            <p class="text-slate-600">
                Une sélection de mes derniers travaux et études de cas.
            </p>
        </div>
        <a class="hidden sm:flex items-center gap-2 text-primary font-bold hover:underline" href="{{ route('projets') }}">
            Voir tous les projets
            <span class="material-symbols-outlined">trending_flat</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        @foreach ($projets as $projet)
            <div class="group flex flex-col gap-6">
                <div class="relative w-full aspect-video rounded-3xl overflow-hidden bg-slate-200">
                    <img alt="Project Thumbnail"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        src="{{ asset('storage/' . $projet->image_couverture) }}" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                        <span class="bg-white text-slate-900 px-4 py-2 rounded-full text-sm font-bold">Étude de
                            cas</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold text-primary uppercase">
                        @foreach ($projet->technologies as $techno)
                            <span>{{ $techno->nom }}</span>
                            @if (!$loop->last)
                                <span>•</span>
                            @endif
                        @endforeach
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">
                        {{ $projet->nom }}
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        {{ $projet->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
