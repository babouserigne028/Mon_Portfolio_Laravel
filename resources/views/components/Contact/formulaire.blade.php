<div class="bg-white rounded-2xl shadow-xl shadow-primary/5 border border-[#e7edf3] p-8 md:p-10">
    <form action="#" class="space-y-5">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-5">
            <div class="flex flex-col gap-2">
                <label class="text-sm font-bold text-[#0d141b]">Nom complet</label>
                <input
                    class="w-full px-4 py-3.5 rounded-lg border border-[#cfdbe7] bg-background-light focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-[#4c739a]/60"
                    placeholder="kingston css" type="text" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-sm font-bold text-[#0d141b]">Adresse email</label>
                <input
                    class="w-full px-4 py-3.5 rounded-lg border border-[#cfdbe7] bg-background-light focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-[#4c739a]/60"
                    placeholder="dar@example.com" type="email" />
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label class="text-sm font-bold text-[#0d141b]">Sujet</label>
            <input
                class="w-full px-4 py-3.5 rounded-lg border border-[#cfdbe7] bg-background-light focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-[#4c739a]/60"
                placeholder="Demande de projet" type="text" />
        </div>
        <div class="flex flex-col gap-2">
            <label class="text-sm font-bold text-[#0d141b]">Message</label>
            <textarea
                class="w-full px-4 py-3.5 rounded-lg border border-[#cfdbe7] bg-background-light focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none placeholder:text-[#4c739a]/60"
                placeholder="Décrivez votre projet..." rows="5"></textarea>
        </div>
        <button
            class="w-full bg-primary hover:bg-primary/90 text-white py-4 rounded-xl font-bold text-base shadow-lg shadow-primary/25 transition-all flex items-center justify-center gap-2 group"
            type="submit">
            <span>Envoyer le message</span>
            <span
                class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">send</span>
        </button>
        <p class="text-center text-xs text-[#4c739a] font-medium">
            Je réponds généralement sous 24 à 48 heures.
        </p>
    </form>
</div>
