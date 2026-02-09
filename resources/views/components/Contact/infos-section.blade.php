@props(['localisation', 'email'])
<div class="flex flex-col justify-center space-y-8">
    <div>
        <h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight mb-4">
            Construisons quelque chose <span class="text-primary">ensemble</span>.
        </h1>
        <p class="text-lg text-[#4c739a] font-normal leading-relaxed">
            Que vous ayez un projet précis ou simplement envie d’échanger, je suis là pour transformer vos idées
            en réalité digitale.
        </p>
    </div>
    <div class="space-y-6">
        <div class="flex items-center gap-4 group">
            <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">mail</span>
            </div>
            <div>
                <p class="text-xs uppercase font-bold tracking-wider text-[#4c739a]">
                    Email
                </p>
                <p class="text-lg font-semibold">{{ $email }}</p>
            </div>
        </div>
        <div class="flex items-center gap-4 group">
            <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">location_on</span>
            </div>
            <div>
                <p class="text-xs uppercase font-bold tracking-wider text-[#4c739a]">
                    Localisation
                </p>
                <p class="text-lg font-semibold">{{ $localisation }}</p>
            </div>
        </div>
    </div>
</div>
