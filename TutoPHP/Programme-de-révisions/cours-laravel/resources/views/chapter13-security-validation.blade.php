<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 13 - Sécurisation des applications avec Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 13 - Sécurisation des applications avec Laravel</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Authentification et autorisation</h2>
            <div class="collapsible-content">
                <p>La sécurisation de votre application Laravel passe par plusieurs étapes, notamment l'authentification
                    des utilisateurs et
                    l'autorisation des actions qu'ils peuvent entreprendre.</p>

                <h3>1. Mise en place de l'authentification</h3>
                <p>Laravel propose un système d'authentification tout prêt que vous pouvez mettre en place très
                    facilement. Pour cela,
                    nous allons utiliser le package Laravel Breeze, qui offre une authentification simple mais efficace.
                </p>

                <h4>Installation de Breeze</h4>
                <p>Commencez par installer le package Breeze avec la commande suivante :</p>
                <pre><code>composer require laravel/breeze --dev</code></pre>
                <p>Ensuite, exécutez la commande pour installer les fichiers d'authentification de base :</p>
                <pre><code>php artisan breeze:install</code></pre>
                <p>Enfin, compilez les assets front-end avec :</p>
                <pre><code>npm install && npm run dev</code></pre>

                <h4>Migration de la base de données</h4>
                <p>Laravel Breeze ajoute des tables dans votre base de données pour gérer les utilisateurs. Exécutez les
                    migrations pour créer ces tables :</p>
                <pre><code>php artisan migrate</code></pre>

                <p>Vous disposez désormais d'une authentification simple où les utilisateurs peuvent s'inscrire, se
                    connecter et réinitialiser leur mot de passe.</p>

                <h3>2. Autorisation des utilisateurs</h3>
                <p>Une fois l'authentification en place, il est nécessaire de définir les permissions et rôles des
                    utilisateurs. Laravel
                    permet de gérer l'autorisation de manière très flexible.</p>

                <h4>Utilisation des gates et des politiques</h4>
                <p>Les <strong>gates</strong> et <strong>politiques</strong> de Laravel permettent de définir des règles
                    d'autorisation pour
                    différentes actions de l'utilisateur dans l'application.</p>

                <h5>Gates</h5>
                <p>Les gates permettent de définir une logique d'autorisation au niveau de l'application. Par exemple,
                    vous pouvez vérifier si un utilisateur
                    a le droit d'effectuer une action particulière.</p>
                <p>Voici comment créer une gate dans le fichier <strong>app/Providers/AuthServiceProvider.php</strong> :
                </p>
                <pre><code>use Illuminate\Support\Facades\Gate;

public function boot()
{
    $this->registerPolicies();

    Gate::define('update-product', function ($user, $product) {
        return $user->id === $product->user_id;
    });
}</code></pre>

                <p>Dans cet exemple, la gate 'update-product' vérifie si l'utilisateur est bien le propriétaire du
                    produit avant de lui permettre de le modifier.</p>

                <h5>Politiques</h5>
                <p>Les politiques permettent de regrouper la logique d'autorisation dans des classes dédiées. Pour
                    générer une politique, vous pouvez utiliser la commande Artisan suivante :</p>
                <pre><code>php artisan make:policy ProductPolicy</code></pre>

                <p>Ensuite, dans la politique générée (<strong>app/Policies/ProductPolicy.php</strong>), vous pouvez
                    définir des méthodes pour chaque action que vous souhaitez autoriser :</p>
                <pre><code>public function update(User $user, Product $product)
{
    return $user->id === $product->user_id;
}</code></pre>

                <p>Dans le contrôleur, vous pouvez maintenant utiliser cette politique pour vérifier si l'utilisateur
                    est autorisé :</p>
                <pre><code>public function edit(Product $product)
{
    $this->authorize('update', $product);

    return view('products.edit', compact('product'));
}</code></pre>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Protection contre les attaques CSRF</h2>
            <div class="collapsible-content">
                <p>Le Cross-Site Request Forgery (CSRF) est une attaque où l'attaquant envoie une requête malveillante
                    depuis un site
                    externe en utilisant les autorisations d'un utilisateur authentifié. Laravel protège automatiquement
                    toutes les requêtes
                    POST contre les attaques CSRF.</p>

                <h3>1. Utilisation du token CSRF</h3>
                <p>Dans vos formulaires, vous devez inclure un champ caché qui contient le token CSRF pour chaque
                    requête POST. Laravel
                    génère automatiquement un token CSRF pour chaque session utilisateur.</p>
                <p>Voici comment inclure le token CSRF dans vos formulaires Blade :</p>
                <pre><code><form action="/products" method="POST">
    @csrf
    <!-- Autres champs du formulaire -->
    <button type="submit">Envoyer</button>
</form></code></pre>

                <p>Lorsque Laravel reçoit la requête, il vérifiera que le token CSRF correspond à celui stocké dans la
                    session de l'utilisateur.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Sécurisation des données d'entrée et validation</h2>
            <div class="collapsible-content">
                <p>Il est essentiel de valider et de sécuriser toutes les données envoyées par l'utilisateur, que ce
                    soit via des formulaires ou des API.</p>

                <h3>1. Validation des entrées</h3>
                <p>Laravel offre un puissant système de validation intégré. Par exemple, pour valider un formulaire de
                    produit, vous pouvez utiliser :</p>
                <pre><code>public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|numeric',
    ]);

    // Logique pour enregistrer le produit
}</code></pre>

                <p>Laravel vérifiera que les données respectent les règles de validation avant de procéder à
                    l'enregistrement dans la base de données.</p>

                <h3>2. Protection contre les injections SQL</h3>
                <p>Laravel utilise les Eloquent ORM ou les requêtes préparées pour interagir avec la base de données, ce
                    qui protège contre les injections SQL.
                    Voici un exemple d'insertion sécurisée d'un produit avec Eloquent :</p>
                <pre><code>Product::create([
    'name' => $request->name,
    'price' => $request->price,
]);</code></pre>

                <p>Laravel échappe automatiquement toutes les entrées de l'utilisateur pour empêcher les attaques par
                    injection SQL.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Exercice :</h2>
            <div class="collapsible-content">
                <ul>
                    <li>Ajoutez l'authentification à votre application Laravel avec Breeze.</li>
                    <li>Implémentez une gate ou une politique pour limiter l'accès aux actions de modification ou de
                        suppression des produits.</li>
                    <li>Ajoutez une protection CSRF à tous les formulaires dans votre application.</li>
                    <li>Assurez-vous que toutes les entrées utilisateur sont validées et sécurisées contre les
                        injections SQL.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>