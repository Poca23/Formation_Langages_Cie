<?php

use App\Models\Chapter;

try {
    Chapter::create(['title' => 'Introduction à PHP', 'description' => 'Premiers pas avec PHP, un langage de programmation côté serveur puissant utilisé dans le développement web moderne.']);

    Chapter::create(['title' => 'Les bases', 'description' => 'Apprenez les bases fondamentales de la syntaxe et des variables en PHP.']);

    Chapter::create(['title' => 'Structures de contrôle', 'description' => 'Comprendre les structures conditionnelles comme if, foreach et les boucles en PHP.']);

    Chapter::create(['title' => 'Fonctions', 'description' => 'Création et utilisation de fonctions pour rendre votre code modulaire.']);

    Chapter::create(['title' => 'Tableaux', 'description' => 'Manipulation des tableaux pour stocker et organiser les données efficacement.']);

    Chapter::create(['title' => 'Sessions et Cookies', 'description' => 'Gérez les sessions utilisateurs et les cookies pour développer des fonctionnalités avancées.']);

    Chapter::create(['title' => 'Installation et Configuration', 'description' => 'Installation de Laravel et configuration des projets.']);

    Chapter::create(['title' => 'Routing et Middleware', 'description' => 'Définissez les routes et utilisez les middlewares pour contrôler l’accès et gérer votre application.']);

    Chapter::create(['title' => 'Contrôleurs et Modèles', 'description' => 'Utilisez le motif MVC avec les contrôleurs et modèles Laravel.']);

    Chapter::create(['title' => 'Création de Vues', 'description' => 'Apprenez à créer des interfaces utilisateur séduisantes avec Blade.']);

    Chapter::create(['title' => 'ORM Eloquent', 'description' => 'Interagissez avec votre base de données efficacement à l’aide d’Eloquent.']);

    Chapter::create(['title' => 'Validation et Formulaires', 'description' => 'Implémentez la validation côté serveur pour des formulaires sécurisés et performants.']);

    Chapter::create(['title' => 'Tests Automatisés', 'description' => 'Apprenez à écrire des tests automatisés pour garantir la stabilité de votre application.']);

    Chapter::create(['title' => 'Déploiement', 'description' => 'Préparez et déployez votre application Laravel en production.']);
} catch (\Exception $e) {
    echo "Erreur lors de l'insertion : " . $e->getMessage();
}
