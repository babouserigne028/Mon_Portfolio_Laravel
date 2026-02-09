@extends('layouts.app')
@section('content')
    <x-header :nom="$utilisateur->nom" />
    <div class="pt-10">
        <div
            class="grow flex flex-col items-center justify-start py-12 px-6 opacity-0 translate-y-2 animate-[fadeUp_400ms_ease-out_forwards]">
            <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-16">
                <x-Contact.infos-section :localisation="$utilisateur->adresse" :email="$utilisateur->email" />
                <x-Contact.formulaire />
            </div>
        </div>
    </div>
    <x-footer />
@endsection
