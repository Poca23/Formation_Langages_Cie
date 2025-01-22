<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sommaire - Apprendre PHP et Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Sommaire - Apprendre PHP et Laravel</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 1 - Introduction à PHP</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter1') }}" class="section-link">
                    <ul>
                        <li>Qu'est-ce que PHP ?</li>
                        <li>Pourquoi utiliser PHP pour le développement web ?</li>
                        <li>Installation de PHP (local ou via un serveur comme XAMPP)</li>
                        <li>Premier script PHP : "Hello World"</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 2 - Les bases du PHP</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter2') }}" class="section-link">
                    <ul>
                        <li>Les variables et les types de données</li>
                        <li>Opérateurs arithmétiques et logiques</li>
                        <li>Les fonctions de base (echo, print, var_dump)</li>
                        <li>Introduction aux constantes et aux variables globales</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 3 - Contrôles de flux</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter3') }}" class="section-link">
                    <ul>
                        <li>Utilisation des conditions : if, else, elseif</li>
                        <li>Les opérateurs de comparaison</li>
                        <li>Les boucles : for, while, foreach</li>
                        <li>Les instructions break et continue</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 4 - Fonctions en PHP</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter4') }}" class="section-link">
                    <ul>
                        <li>Déclaration de fonctions</li>
                        <li>Passer des arguments aux fonctions</li>
                        <li>Valeur de retour des fonctions</li>
                        <li>Fonctions intégrées en PHP</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 5 - Tableaux et manipulation de données</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter5') }}" class="section-link">
                    <ul>
                        <li>Introduction aux tableaux (indexés et associatifs)</li>
                        <li>Boucle sur les tableaux avec foreach</li>
                        <li>Manipulation des tableaux (ajouter, supprimer, trier des éléments)</li>
                        <li>Fonctions utiles pour les tableaux (count, array_push, array_merge)</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 6 - Superglobales et formulaires</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter6') }}" class="section-link">
                    <ul>
                        <li>Utilisation de $_GET, $_POST, et $_SESSION</li>
                        <li>Manipuler les données d'un formulaire HTML avec PHP</li>
                        <li>Sécuriser les données envoyées via les formulaires</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 7 - Gestion des fichiers en PHP</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter7') }}" class="section-link">
                    <ul>
                        <li>Lire et écrire des fichiers avec fopen, fwrite, fread</li>
                        <li>Manipulation des fichiers (créer, supprimer, déplacer)</li>
                        <li>Télécharger des fichiers via un formulaire PHP</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 8 - Introduction aux bases de données avec MySQL</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter8') }}" class="section-link">
                    <ul>
                        <li>Connexion à une base de données MySQL avec PHP</li>
                        <li>Créer, lire, mettre à jour et supprimer des enregistrements dans la base de données</li>
                        <li>Préparer des requêtes sécurisées pour éviter les injections SQL</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 9 - Introduction à l'architecture MVC (Model-View-Controller)</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter9') }}" class="section-link">
                    <ul>
                        <li>Qu'est-ce que l'architecture MVC ?</li>
                        <li>Créer une petite application PHP utilisant MVC</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 10 - Introduction à Laravel</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter10') }}" class="section-link">
                    <ul>
                        <li>Présentation du framework Laravel</li>
                        <li>Installation de Laravel</li>
                        <li>Structure d'un projet Laravel</li>
                        <li>Création de votre première route et contrôleur Laravel</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 11 - Bases de données avec Laravel</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter11') }}" class="section-link">
                    <ul>
                        <li>Configuration de la connexion à la base de données</li>
                        <li>Migration de tables avec Artisan</li>
                        <li>Utilisation de l'Eloquent ORM pour interagir avec la base de données</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 12 - Développement d'une application avec Laravel</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter12') }}" class="section-link">
                    <ul>
                        <li>Création d'une petite application CRUD (Créer, Lire, Mettre à jour, Supprimer)</li>
                        <li>Utilisation des vues et des contrôleurs dans Laravel</li>
                        <li>Validation des formulaires avec Laravel</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 13 - Sécurisation des applications avec Laravel</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter13') }}" class="section-link">
                    <ul>
                        <li>Authentification et autorisation</li>
                        <li>Sécurisation des formulaires contre les attaques CSRF</li>
                        <li>Utilisation des politiques et des permissions dans Laravel</li>
                    </ul>
                </a>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Chapitre 14 - Optimisation et déploiement</h2>
            <div class="collapsible-content">
                <a href="{{ route('chapter14') }}" class="section-link">
                    <ul>
                        <li>Optimiser les performances de votre application Laravel</li>
                        <li>Déployer votre application Laravel sur un serveur de production</li>
                    </ul>
                </a>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>