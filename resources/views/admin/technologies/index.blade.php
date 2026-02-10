@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-between mb-10">
    <h1 class="text-3xl font-bold text-slate-900">Technologies</h1>
    <a href="{{ route('admin.technologies.create') }}" class="bg-primary text-white px-5 py-2 rounded-lg font-bold shadow-md">
        + Ajouter
    </a>
</div>

<div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Nom</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($technologies as $tech)
            <tr class="hover:bg-slate-50">
                <td class="px-6 py-4 text-sm font-bold text-slate-900">{{ $tech->nom }}</td>
                <td class="px-6 py-4">
                    <div class="flex justify-end gap-4">

                        <form action="{{ route('admin.technologies.destroy', $tech->id) }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex items-center gap-1 text-red-600 hover:underline">
                                <span class="material-symbols-outlined text-sm">delete</span> Supprimer
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