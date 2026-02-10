@extends('layouts.admin')

@section('content')
<div class="mb-10">
    <h2 class="text-3xl font-bold tracking-tight text-slate-900">Bienvenue, {{ Auth::user()->name }}</h2>
    <p class="text-slate-500">Voici l'état actuel de votre portfolio.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-3xl">layers</span>
        </div>
        <div class="text-3xl font-bold text-slate-900">{{ \App\Models\Projet::count() }}</div>
        <div class="text-slate-500 uppercase text-[10px] tracking-widest font-bold mt-1">Projets Réalisés</div>
    </div>
    
    <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
        <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-3xl">terminal</span>
        </div>
        <div class="text-3xl font-bold text-slate-900">{{ \App\Models\Technologie::count() }}</div>
        <div class="text-slate-500 uppercase text-[10px] tracking-widest font-bold mt-1">Technologies Maîtrisées</div>
    </div>

    <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
        <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-3xl">verified_user</span>
        </div>
        <div class="text-slate-900 font-bold">Session Active</div>
        <div class="text-slate-500 uppercase text-[10px] tracking-widest font-bold mt-1">Accès Administrateur</div>
    </div>
</div>

<div class="mt-10">
    <a href="{{ route('admin.projets.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white rounded-2xl font-bold hover:bg-slate-800 transition-all active:scale-95 shadow-xl shadow-slate-900/20">
        <span class="material-symbols-outlined text-sm">add</span> Nouveau Projet rapide
    </a>
</div>
@endsection