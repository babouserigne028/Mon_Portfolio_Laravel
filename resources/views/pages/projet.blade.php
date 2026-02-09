@extends('layouts.app')
@section('content')
    <x-header :nom="$utilisateur->nom" />
    <div class="pt-10">
        <div
            class="max-w-8xl mx-auto w-full px-6 md:px-10 py-10 opacity-0 translate-y-2 animate-[fadeUp_400ms_ease-out_forwards]">
            <x-Projet.header-projets :technologies="$technologies" />
            <x-Projet.main-projets :projets="$projets" />
        </div>
    </div>
    <x-footer />
@endsection
