@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-between mb-10">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Mes Projets</h1>
        <p class="text-slate-500">Gérez vos réalisations affichées sur le portfolio.</p>
    </div>
    <a href="{{ route('admin.projets.create') }}" class="flex items-center gap-2 rounded-xl bg-primary px-5 py-3 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-95">
        <span class="material-symbols-outlined">add_circle</span> Nouveau Projet
    </a>
</div>

<div class="bg-white border border-slate-200/60 rounded-2xl overflow-hidden shadow-sm">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50/50 border-b border-slate-200/60">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Aperçu</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Titre du Projet</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Technologies</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($projets as $projet)
            <tr class="hover:bg-slate-50/50 transition-colors">
                <td class="px-6 py-4">
                    <img src="{{ asset('storage/' . $projet->image_couverture) }}" class="w-20 h-14 object-cover rounded-lg border border-slate-200">
                </td>
                <td class="px-6 py-4 text-sm font-bold text-slate-900">{{ $projet->nom }}</td>
                <td class="px-6 py-4">
                    <div class="flex gap-1 flex-wrap">
                        @foreach($projet->technologies as $tech)
                            <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-600 text-[10px] font-bold">{{ $tech->nom }}</span>
                        @endforeach
                    </div>
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.projets.edit', $projet->id) }}" class="p-2 text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">edit_square</span>
                        </a>
                        <form action="{{ route('admin.projets.destroy', $projet->id) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?')">
                            @csrf @method('DELETE')
                            <button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection