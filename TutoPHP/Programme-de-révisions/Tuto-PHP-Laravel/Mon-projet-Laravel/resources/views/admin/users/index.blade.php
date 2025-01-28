@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
<h1>Mon Profil</h1>
@include('admin.partials.toasts') {{-- Inclure les messages de notification --}}

<p>Nom: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('admin.users.edit') }}" class="btn btn-primary">Modifier Profil</a>
@endsection