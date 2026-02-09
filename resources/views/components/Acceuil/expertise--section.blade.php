@props(['domaines'])
<section class="bg-white py-24">
    <div class="max-w-8xl mx-auto px-6 md:px-12">
        <div class="flex flex-col gap-4 mb-16">
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                Domaines de compétence
            </h2>
            <div class="h-1.5 w-20 bg-primary rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($domaines as $domaine)
                <div
                    class="group p-8 rounded-2xl border border-slate-200 hover:border-primary/30 hover:bg-slate-50 transition-all duration-300">
                    <div class="mb-6 inline-flex p-3 rounded-xl"
                        style="background-color: {{ $domaine->couleur }}; color: #fff;">
                        <span class="material-symbols-outlined">{{ $domaine->icone }}</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">
                        {{ $domaine->nom }}
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        {{ $domaine->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
