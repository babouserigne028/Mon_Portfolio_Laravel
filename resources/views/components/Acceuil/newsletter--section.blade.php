<section class="max-w-7xl mx-auto px-6 md:px-12 pb-24">
    <div class="bg-primary rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden text-center">
        <div class="absolute top-0 right-0 p-12 opacity-10">
            <span class="material-symbols-outlined text-[120px] text-white">mail</span>
        </div>
        <div class="relative z-10 flex flex-col items-center gap-8">
            <div class="flex flex-col gap-4 max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
                    Prêt à créer quelque chose d’extraordinaire ?
                </h2>
                <p class="text-white/80 text-lg">
                    Actuellement disponible pour des missions freelance et des opportunités à temps plein.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                <button
                    onclick="window.location='{{ route('contact') }}'"
                    class="bg-white text-primary px-10 py-4 rounded-xl font-bold hover:bg-slate-50 transition-colors shadow-lg shadow-black/10">
                    Me contacter
                </button>
            </div>
        </div>
    </div>
</section>
