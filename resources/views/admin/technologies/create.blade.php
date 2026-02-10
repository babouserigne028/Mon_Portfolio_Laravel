@extends('layouts.admin')

@section('content')
<div class="max-w-2xl">
    <div class="mb-10">
        <a href="{{ route('admin.technologies.index') }}" class="flex items-center gap-2 text-sm font-bold text-slate-400 hover:text-primary transition-colors mb-4">
            <span class="material-symbols-outlined text-sm">arrow_back</span> Retour
        </a>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Ajouter une Technologie</h1>
    </div>

    <form action="{{ route('admin.technologies.store') }}" method="POST" class="bg-white border border-slate-200/60 rounded-3xl p-8 shadow-sm space-y-6">
        @csrf
        <div class="space-y-2">
            <label class="text-xs font-bold uppercase text-slate-500">Nom de la techno</label>
            <input type="text" name="nom" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-primary transition-all bg-slate-50/30" placeholder="Ex: Laravel" required>
        </div>

        <div class="space-y-2">
            <label class="text-xs font-bold uppercase text-slate-500">Domaines de compétence</label>
            <div class="grid grid-cols-2 gap-3 p-4 rounded-2xl bg-slate-50/50 border border-slate-200/60">
                @foreach($domaines as $domaine)
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input type="checkbox" name="domaines[]" value="{{ $domaine->id }}" class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary">
                        <span class="text-xs font-medium text-slate-600 group-hover:text-primary transition-colors">{{ $domaine->nom }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <button type="submit" class="w-full rounded-xl bg-primary py-4 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-95">
            CRÉER LA TECHNOLOGIE
        </button>
    </form>
</div>
@endsection