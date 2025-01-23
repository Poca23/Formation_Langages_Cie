@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <!-- Card Header -->
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Inscription</h4>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <!-- Affichage des messages de succès ou d'erreur -->
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulaire d'inscription -->
                    <form method="POST" action="{{ route('register.custom') }}">
                        @csrf
                        <!-- Champ Nom -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom complet</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Entrez votre nom complet" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Champ Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Entrez votre adresse email"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Champ Mot de Passe -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Créez un mot de passe sécurisé" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small id="passwordHelp" class="form-text text-muted">
                                Votre mot de passe doit comporter au moins 6 caractères.
                            </small>
                        </div>

                        <!-- Champ Confirmation Mot de Passe -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation"
                                placeholder="Confirmez votre mot de passe" required>
                        </div>

                        <!-- Bouton Inscription -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                S'inscrire
                            </button>
                        </div>
                    </form>

                    <!-- Lien vers la page de Connexion -->
                    <div class="mt-3 text-center">
                        <p>Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection