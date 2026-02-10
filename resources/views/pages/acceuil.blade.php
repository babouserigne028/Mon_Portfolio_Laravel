@extends('layouts.app')

@section('content')
    <x-header :nom="$nom" />

    <div class="pt-20">
        <!-- Appel du composant avec les données du contrôleur -->
        <x-Acceuil.hero--section 
            :prenom="$prenom" 
            :nom="$nom" 
            :apropos="$apropos" 
            :nbre_annee_experience="$nbre_annee_experience" 
            :photo="$photo"
            :lien_cv="$lien_cv" 
        />

        <x-Acceuil.expertise--section :domaines="$domaines" />
        <x-Acceuil.sommaire--section :projets="$projets" />
        <x-Acceuil.newsletter--section />
        <x-footer />
    </div>
@endsection