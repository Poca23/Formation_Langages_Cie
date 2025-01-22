<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 14 - Optimisation et déploiement</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 14 - Optimisation et déploiement</h1>
    </header>

    <main>

    <a href="{{ route('home') }}">Retour au Sommaire</a>


        <section class="collapsible"  id="chapter12">
            <h2 class="collapsible-header">Optimisation des performances</h2>
            <div class="collapsible-content">
                <p>Optimiser les performances d'une application Laravel est essentiel pour garantir une expérience
                    utilisateur fluide et rapide,
                    en particulier lorsque l'application se trouve en production. Laravel offre plusieurs outils pour
                    améliorer la performance.</p>

                <h3>1. Mise en cache des routes et des vues</h3>
                <p>Laravel permet de mettre en cache les routes et les vues pour éviter les recalculs inutiles lors des
                    requêtes. Cela peut réduire considérablement
                    le temps de réponse.</p>

                <h4>Cache des routes</h4>
                <p>Pour mettre en cache les routes de votre application, exécutez la commande suivante :</p>
                <pre><code>php artisan route:cache</code></pre>
                <p>Cette commande génère un fichier de cache pour les routes, ce qui réduit le temps nécessaire pour
                    charger les routes lors de l'exécution des requêtes.</p>

                <h4>Cache des vues</h4>
                <p>De même, pour mettre en cache les vues Blade, vous pouvez utiliser la commande :</p>
                <pre><code>php artisan view:cache</code></pre>
                <p>Cela précompilera toutes les vues pour éviter les rendus répétitifs.</p>

                <h3>2. Mise en cache des données</h3>
                <p>Laravel offre également un mécanisme de cache pour stocker les données fréquemment consultées. Par
                    exemple, vous pouvez mettre en cache
                    les résultats d'une requête de base de données :</p>
                <pre><code>Cache::remember('products', 60, function() {
    return Product::all();
});</code></pre>
                <p>Ceci met en cache les produits pendant 60 minutes. Si la donnée est déjà en cache, elle sera
                    récupérée sans refaire la requête à la base de données.</p>

                <h3>3. Optimisation des requêtes Eloquent</h3>
                <p>Pour améliorer la performance des requêtes Eloquent, utilisez les méthodes de "chargement paresseux"
                    et "chargement hâtif".</p>

                <h4>Chargement paresseux</h4>
                <p>Le chargement paresseux (Lazy Loading) consiste à ne charger les relations d'un modèle qu'au moment
                    où elles sont réellement nécessaires :</p>
                <pre><code>$product = Product::find(1);
$reviews = $product->reviews;</code></pre>

                <h4>Chargement hâtif</h4>
                <p>Le chargement hâtif (Eager Loading) permet de charger les relations au moment de la requête initiale,
                    ce qui peut améliorer les performances
                    lorsque vous avez plusieurs relations :</p>
                <pre><code>$products = Product::with('reviews')->get();</code></pre>
                <p>Cela évite de faire plusieurs requêtes supplémentaires lorsque vous accédez aux relations.</p>

                <h3>4. Compression des fichiers CSS et JS</h3>
                <p>En production, vous devez toujours compiler et minifier vos fichiers CSS et JavaScript pour réduire
                    leur taille et améliorer les performances.</p>
                <p>Vous pouvez le faire en utilisant Laravel Mix, qui est intégré par défaut dans Laravel :</p>
                <pre><code>npm run prod</code></pre>
                <p>Cela va minifier et combiner les fichiers CSS et JS pour qu'ils soient plus rapides à charger sur les
                    clients.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Déploiement de l'application</h2>
            <div class="collapsible-content">
                <p>Une fois votre application prête pour la production, il est temps de la déployer sur un serveur. Ce
                    processus peut inclure la mise en place d'un serveur
                    web, d'une base de données et la configuration de votre environnement de production.</p>

                <h3>1. Préparation de l'environnement</h3>
                <p>Avant de déployer l'application, assurez-vous que votre environnement de production est prêt. Cela
                    inclut :</p>
                <ul>
                    <li>Le serveur web : Apache, Nginx ou tout autre serveur compatible avec Laravel.</li>
                    <li>La base de données : MySQL, PostgreSQL ou une autre base de données selon vos besoins.</li>
                    <li>PHP : La version de PHP utilisée doit être compatible avec Laravel (idéalement PHP 8.x ou
                        supérieur).</li>
                    <li>Les extensions PHP nécessaires : PDO, Mbstring, OpenSSL, etc.</li>
                </ul>

                <h3>2. Déploiement via Git</h3>
                <p>Un moyen courant de déployer une application Laravel est d'utiliser Git pour gérer les versions du
                    code. Voici un exemple de flux de travail :</p>
                <ul>
                    <li>Clonez le dépôt Git sur votre serveur de production :
                        <pre><code>git clone https://github.com/votre-utilisateur/votre-repository.git</code></pre>
                    </li>
                    <li>Accédez au dossier du projet :
                        <pre><code>cd votre-repository</code></pre>
                    </li>
                    <li>Installez les dépendances avec Composer :
                        <pre><code>composer install --optimize-autoloader --no-dev</code></pre>
                    </li>
                    <li>Exécutez les migrations de la base de données :
                        <pre><code>php artisan migrate --force</code></pre>
                    </li>
                    <li>Générez la clé d'application si ce n'est pas déjà fait :
                        <pre><code>php artisan key:generate</code></pre>
                    </li>
                    <li>Configurez l'environnement de production dans le fichier .env (base de données, cache, etc.).
                    </li>
                    <li>Assurez-vous que les fichiers de cache sont à jour :
                        <pre><code>php artisan config:cache</code></pre>
                    </li>
                </ul>

                <h3>3. Configuration du serveur web</h3>
                <p>Si vous utilisez Nginx ou Apache, assurez-vous que votre serveur est bien configuré pour rediriger
                    toutes les requêtes vers <strong>public/index.php</strong>,
                    ce fichier est le point d'entrée de l'application Laravel.</p>
                <p>Voici un exemple de configuration pour Nginx :</p>
                <pre><code>server {
    listen 80;
    server_name votre-domaine.com;
    root /chemin/vers/votre-projet/public;

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include snippets/fastcgi-php.conf;
    }
}</code></pre>

                <h3>4. Configuration du processus de déploiement continu (CI/CD)</h3>
                <p>Pour rendre votre déploiement plus fluide, vous pouvez utiliser des outils de CI/CD comme Jenkins,
                    GitLab CI, ou GitHub Actions. Ces outils permettent
                    de déployer automatiquement votre application après chaque modification sur le dépôt Git, avec des
                    étapes comme la validation des tests et la mise à jour du serveur.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Exercice :</h2>
            <div class="collapsible-content">
                <ul>
                    <li>Optimisez les performances de votre application en mettant en cache les routes, vues et données.
                    </li>
                    <li>Compilez et minifiez vos fichiers CSS et JS en production.</li>
                    <li>Préparez votre application pour le déploiement sur un serveur en configurant correctement
                        l'environnement.</li>
                    <li>Déployez votre application sur un serveur en utilisant Git et configurez le serveur web pour
                        rediriger les requêtes vers <strong>public/index.php</strong>.</li>
                    <li>Configurez un processus CI/CD pour automatiser les déploiements futurs.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>