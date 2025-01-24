<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation PHP/Laravel - @yield('title', 'Accueil')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">

    @yield('styles') <!-- Placeholders CSS spécifiques à des vues -->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo / Marque -->
            <a class="navbar-brand" href="{{ url('/') }}">Formation PHP/Laravel</a>

            <!-- Bouton pour affichage mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sommaire') ? 'active' : '' }}"
                            href="{{ route('sommaire') }}">Sommaire</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @endauth
                </ul>

                <!-- Menu utilisateur -->
                <ul class="navbar-nav">
                    @guest
                        <!-- Invités -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                                href="{{ route('login') }}">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                                href="{{ route('register') }}">Inscription</a>
                        </li>
                    @endguest
                    @auth
                        <!-- Utilisateur connecté -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                            Déconnexion</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu Principal -->
    <main class="py-4">
        <div class="container">
            @yield('content') <!-- Contenu dynamique spécifique de chaque vue -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; {{ date('Y') }} Formation PHP/Laravel. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-white me-2"><i class="fab fa-github"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/quiz.js') }}"></script>
    @yield('scripts') <!-- JS spécifiques pour des vues -->
</body>

</html>