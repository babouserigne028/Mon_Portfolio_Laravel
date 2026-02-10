@extends('layouts.admin')

@section('content')
<div class="max-w-4xl">
    <div class="mb-10">
        <a href="{{ route('admin.projets.index') }}" class="flex items-center gap-2 text-sm font-bold text-slate-400 hover:text-primary transition-colors mb-4">
            <span class="material-symbols-outlined text-sm">arrow_back</span> 
            Retour à la liste
        </a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Modifier le Projet</h1>
        <p class="text-slate-500 text-sm">Mise à jour des informations de : <span class="text-primary font-semibold">{{ $projet->nom }}</span></p>
    </div>

    <form action="{{ route('admin.projets.update', $projet->id) }}" method="POST" enctype="multipart/form-data" class="bg-white border border-slate-200/60 rounded-3xl p-8 shadow-sm space-y-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Nom du projet</label>
                <div class="relative">
                    <input type="text" name="nom" value="{{ $projet->nom }}" 
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-primary transition-all bg-slate-50/30 text-slate-700 font-medium" 
                        required>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Image de couverture</label>
                <div class="flex items-center gap-4">
                    @if($projet->image_couverture)
                        <img src="{{ asset('storage/' . $projet->image_couverture) }}" class="w-16 h-12 object-cover rounded-lg border border-slate-100 shadow-sm">
                    @endif
                    <input type="file" name="image_couverture" 
                        class="block w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-slate-100 file:text-slate-600 hover:file:bg-slate-200 cursor-pointer transition-all">
                </div>
                <p class="text-[10px] text-slate-400">Laissez vide pour conserver l'image actuelle.</p>
            </div>
        </div>

        <div class="space-y-2">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Description du projet</label>
            <textarea name="description" rows="6" 
                class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-primary transition-all bg-slate-50/30 text-slate-600 leading-relaxed" 
                required>{{ $projet->description }}</textarea>
        </div>

        <div class="space-y-4">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Technologies associées</label>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 p-5 rounded-2xl bg-slate-50/50 border border-slate-200/60">
                @foreach($technologies as $tech)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <div class="relative flex items-center justify-center">
                            <input type="checkbox" name="technologies[]" value="{{ $tech->id }}" 
                                class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-slate-300 bg-white checked:bg-primary checked:border-primary transition-all"
                                {{ $projet->technologies->contains($tech->id) ? 'checked' : '' }}>
                            <span class="material-symbols-outlined absolute text-white text-xs opacity-0 peer-checked:opacity-100 pointer-events-none">check</span>
                        </div>
                        <span class="text-xs font-semibold text-slate-600 group-hover:text-primary transition-colors">
                            {{ $tech->nom }}
                        </span>
                    </label>
                @endforeach
            </div>
        </div>

        <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
            <button type="button" onclick="window.history.back()" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">
                Annuler
            </button>
            <button type="submit" class="flex items-center gap-2 rounded-xl bg-primary px-10 py-4 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-[0.98]">
                <span class="material-symbols-outlined text-sm">save</span>
                METTRE À JOUR LE PROJET
            </button>
        </div>
    </form>
</div>
@endsection