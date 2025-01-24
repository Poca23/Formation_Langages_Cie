@extends('layouts.app')

@section('title', 'Page non trouvée')

@section('content')
<div class="container text-center">
    <h1 class="display-1 text-danger">404</h1>
    <p class="lead">Oups ! La page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="{{ route('home') }}" class="btn btn-primary"><i class="fas fa-home"></i> Retour à la page d'accueil</a>
</div>
@endsection