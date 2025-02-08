<?php

use App\Models\Chapter;

try {
    Chapter::create(['title' => 'Introduction à PHP', 'description' => null]);

    Chapter::create(['title' => 'Les bases', 'description' => null]);

    Chapter::create(['title' => 'Structures de contrôle', 'description' => null]);

    Chapter::create(['title' => 'Fonctions', 'description' => null]);

    Chapter::create(['title' => 'Tableaux', 'description' => null]);

    Chapter::create(['title' => 'Sessions et Cookies', 'description' => null]);

    Chapter::create(['title' => 'Installation et Configuration', 'description' => null]);

    Chapter::create(['title' => 'Routing et Middleware', 'description' => null]);

    Chapter::create(['title' => 'Contrôleurs et Modèles', 'description' => null]);

    Chapter::create(['title' => 'Création de Vues', 'description' => null]);

    Chapter::create(['title' => 'ORM Eloquent', 'description' => null]);

    Chapter::create(['title' => 'Validation et Formulaires', 'description' => null]);

    Chapter::create(['title' => 'Tests Automatisés', 'description' => null]);

    Chapter::create(['title' => 'Déploiement', 'description' => null]);
} catch (\Exception $e) {
    echo "Erreur lors de l'insertion : " . $e->getMessage();
}
