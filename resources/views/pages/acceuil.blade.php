@extends('layouts.app')
@section('content')
    <x-header />
    <div class="pt-10">
        <x-Acceuil.hero--section :name="'Serigne Abdoulaye Babou'" />
        <x-Acceuil.expertise--section />
        <x-Acceuil.sommaire--section />
        <x-Acceuil.newsletter--section />
        <x-footer />
    </div>
@endsection
