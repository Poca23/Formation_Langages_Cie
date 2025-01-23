@extends('layouts.app')

@section('title', '404 - Page introuvable')

@section('content')
<div class="text-center">
    <h1>404</h1>
    <p>La page que vous recherchez est introuvable.</p>
    <a href="{{ route('sommaire') }}" class="btn btn-primary">Retour au sommaire</a>
</div>
@endsection