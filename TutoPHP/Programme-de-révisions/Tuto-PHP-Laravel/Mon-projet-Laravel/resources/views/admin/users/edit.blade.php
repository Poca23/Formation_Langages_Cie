@extends('layouts.app')

@section('title', 'Modifier Mon Profil')

@section('content')
<h1>Modifier Mon Profil</h1>

<form action="{{ route('admin.users.update') }}" method="POST">
    @csrf
    @method('PUT') {{-- Pour indiquer que nous faisons une mise à jour --}}

    <label for="name">Nom:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>

    <button type="submit">Mettre à jour le profil</button>
</form>
@endsection