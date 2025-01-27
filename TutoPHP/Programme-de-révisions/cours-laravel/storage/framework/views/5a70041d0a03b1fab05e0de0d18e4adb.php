<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation PHP/Laravel - <?php echo $__env->yieldContent('title', 'Accueil'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/quiz.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('styles'); ?> <!-- Placeholders CSS spécifiques à des vues -->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo / Marque -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Formation PHP/Laravel</a>

            <!-- Bouton pour affichage mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>"
                                href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('sommaire') ? 'active' : ''); ?>"
                            href="<?php echo e(route('sommaire')); ?>">Sommaire</a>
                    </li>
                </ul>

                <!-- Menu utilisateur -->
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                        <!-- Invités -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('login.custom') ? 'active' : ''); ?>"
                                href="<?php echo e(route('login')); ?>">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('register.custom') ? 'active' : ''); ?>"
                                href="<?php echo e(route('register')); ?>">Inscription</a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <!-- Utilisateur connecté -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                            Déconnexion</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu Principal -->
    <main class="py-4">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?> <!-- Contenu dynamique spécifique de chaque vue -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo e(date('Y')); ?> Formation PHP/Laravel. Tous droits réservés.</p>
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
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/quiz.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?> <!-- JS spécifiques pour des vues -->
</body>

</html><?php /**PATH /home/greta/Desktop/workspace/Formation_Langages_Cie/TutoPHP/Programme-de-révisions/cours-laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>