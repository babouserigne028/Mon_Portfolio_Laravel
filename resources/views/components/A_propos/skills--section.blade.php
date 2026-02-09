@props(['technologies'])
<div class="lg:col-span-5">
    <div class="bg-white p-8 lg:p-10 rounded-2xl border border-slate-100 shadow-xl shadow-slate-200/50">
        <h2 class="text-xl font-bold text-slate-900 mb-8 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">analytics</span>
            Compétences techniques
        </h2>
        <div class="space-y-6">
            @foreach ($technologies as $techno)
                <div class="flex items-center gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200 mb-2">
                    <div class="size-10 rounded-lg bg-white flex items-center justify-center text-primary shadow-sm">
                        <span class="material-symbols-outlined text-2xl">memory</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-base font-semibold text-slate-900">{{ $techno->nom }}</span>
                        @if ($techno->domaines->isNotEmpty())
                            <span class="text-xs font-bold text-primary">{{ $techno->domaines->first()->nom }}</span>
                        @endif
                        <span class="text-xs text-slate-500">{{ $techno->description }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div
        class="mt-8 px-6 py-4 bg-primary/5 rounded-xl border border-primary/10 italic text-slate-600 text-sm leading-relaxed">
        « Un code propre n’est pas seulement une norme ; c’est un engagement envers les développeurs futurs et
        l’expérience utilisateur. »
    </div>
</div>
