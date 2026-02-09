@props(['prenom', 'nom', 'apropos', 'nbre_annee_experience', 'photo', 'lien_cv'])
<section class="max-w-8xl mx-auto px-6 md:px-12 lg:px-10 py-6 md:py-24 lg:py-12">
    <div
        class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 opacity-0 translate-y-2 animate-[fadeUp_400ms_ease-out_forwards]">
        <div class="flex flex-col gap-8 flex-1 text-center lg:text-left">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mx-auto lg:mx-0 w-fit">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Disponible pour de nouveaux projets
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-black tracking-tight text-slate-900 leading-[1.1]">
                    Bonjour, je suis {{ $prenom }} {{ $nom }}, un
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Fullstack
                        Developer</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    {{ $apropos }}
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                <button onclick="window.location.href='{{ route('projets') }}'"
                    class="w-full sm:w-auto flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-95">
                    Voir mes réalisations
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </button>
                <a href="{{ asset('storage/' . $lien_cv) }}" target="_blank" download
                    class="w-full sm:w-auto flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-8 py-4 text-base font-bold text-slate-900 hover:bg-slate-50 transition-all active:scale-95">
                    Télécharger CV
                    <span class="material-symbols-outlined text-[20px]">download</span>
                </a>
            </div>
        </div>
        <div class="flex-1 w-full max-w-md lg:max-w-[25vw] relative">
            <div class="absolute -inset-4 bg-primary/20 rounded-3xl blur-2xl"></div>
            <div
                class="relative overflow-hidden rounded-3xl border border-white/20 shadow-2xl bg-slate-200 aspect-4/5 lg:aspect-square">
                <img alt="Alex Portfolio Photo"
                    class="w-full h-full object-cover grayscale-20 hover:grayscale-0 transition-all duration-700 hover:scale-105"
                    data-alt="Professional headshot of a smiling male fullstack developer"
                    src="{{ asset('storage/' . $photo) }}" />
            </div>
            <div
                class="absolute -bottom-6 -left-6 p-6 rounded-2xl bg-white shadow-xl border border-slate-100 hidden md:block">
                <div class="flex items-center gap-4">
                    <div class="p-3 rounded-xl bg-orange-100 text-orange-600">
                        <span class="material-symbols-outlined">auto_awesome</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold">{{ $nbre_annee_experience }}+ Years</p>
                        <p class="text-xs text-slate-500">
                            Experience
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
