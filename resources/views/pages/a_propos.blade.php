@extends('layouts.app')
@section('content')
    <x-header :nom="$utilisateur->nom" />
    <div class="pt-20">
        <div class="max-w-8xl mx-auto px-6 lg:px-12 lg:py-12">
            <div
                class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-start opacity-0 translate-y-2 animate-[fadeUp_400ms_ease-out_forwards]">
                <x-A_propos.narative--section />
                <x-A_propos.skills--section :technologies="$technologies" />
            </div>
        </div>
    </div>
    <x-footer />
@endsection
