@extends('layouts.app')
@section('content')
    <x-header />
    <div class="pt-10">
        <div class="max-w-8xl mx-auto w-full px-6 md:px-10 py-10 opacity-0 translate-y-2 animate-[fadeUp_400ms_ease-out_forwards]">
            <x-Projet.header-projets />
            <x-Projet.main-projets />
        </div>
    </div>
    <x-footer />
@endsection
