@extends('layouts.admin')

@section('content')
<div class="max-w-3xl">
    <div class="mb-10">
        <a href="{{ route('admin.projets.index') }}" class="flex items-center gap-2 text-sm font-bold text-slate-400 hover:text-primary transition-colors mb-4">
            <span class="material-symbols-outlined text-sm">arrow_back</span> Retour à la liste
        </a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Nouveau Projet</h1>
    </div>

    <form action="{{ route('admin.projets.store') }}" method="POST" enctype="multipart/form-data" class="bg-white border border-slate-200/60 rounded-3xl p-8 shadow-sm space-y-6">
        @csrf
        <div class="space-y-2">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Nom du projet</label>
            <input type="text" name="nom" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-primary transition-all bg-slate-50/30" placeholder="Ex: E-commerce Website" required>
        </div>

        <div class="space-y-2">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-primary transition-all bg-slate-50/30" placeholder="Décrivez votre projet..." required></textarea>
        </div>

        <div class="space-y-2">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Image illustrative</label>
            <input type="file" name="image_couverture" class="block w-full text-xs text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-primary file:text-white hover:file:bg-primary/90 cursor-pointer" required>
        </div>

        <div class="space-y-2">
            <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Technologies</label>
            <div class="grid grid-cols-3 gap-3 p-4 rounded-2xl bg-slate-50/50 border border-slate-200/60">
                @foreach($technologies as $tech)
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input type="checkbox" name="technologies[]" value="{{ $tech->id }}" class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary">
                        <span class="text-xs font-medium text-slate-600 group-hover:text-primary transition-colors">{{ $tech->nom }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <button type="submit" class="w-full rounded-xl bg-primary py-4 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-[0.98]">
            PUBLIER LE PROJET
        </button>
    </form>
</div>
@endsection