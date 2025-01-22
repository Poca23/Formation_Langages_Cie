<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 11 - Bases de données avec Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 11 - Bases de données avec Laravel</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Configuration de la connexion à la base de données</h2>
            <div class="collapsible-content">
                <p>Laravel offre une gestion simple et fluide des bases de données. Pour commencer, vous devez
                    configurer la
                    connexion à la base de données dans le fichier <strong>.env</strong> situé à la racine de votre
                    projet.</p>
                <p>Voici comment configurer les informations de connexion :</p>
                <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base_de_donnees
DB_USERNAME=votre_utilisateur
DB_PASSWORD=mot_de_passe</code></pre>
                <p>Assurez-vous que votre base de données MySQL est en cours d'exécution et que les informations de
                    connexion
                    correspondent à celles de votre serveur MySQL.</p>
                <p>Laravel utilise Eloquent, un ORM (Object Relational Mapper), qui permet de travailler avec les bases
                    de
                    données de manière simple et intuitive en utilisant des modèles PHP.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Migrations de bases de données</h2>
            <div class="collapsible-content">
                <p>Les migrations sont des scripts qui permettent de versionner et de gérer la structure de votre base
                    de
                    données. Elles facilitent le partage des modifications de la base de données entre les développeurs.
                </p>
                <h3>Création d'une migration</h3>
                <p>Pour créer une migration, utilisez la commande Artisan suivante :</p>
                <pre><code>php artisan make:migration create_table_name</code></pre>
                <p>Cela crée un fichier de migration dans le répertoire <strong>database/migrations</strong>. Ce fichier
                    contient
                    deux méthodes principales : <strong>up()</strong> et <strong>down()</strong>.</p>
                <p>Voici un exemple de migration pour créer une table <strong>products</strong> :</p>
                <pre><code>public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->timestamps();
    });
}</code></pre>
                <p>La méthode <strong>up()</strong> définit la structure de la table, et <strong>down()</strong> permet
                    de la supprimer :</p>
                <pre><code>public function down()
{
    Schema::dropIfExists('products');
}</code></pre>
                <h3>Exécution des migrations</h3>
                <p>Une fois la migration créée, vous pouvez l'exécuter avec la commande :</p>
                <pre><code>php artisan migrate</code></pre>
                <p>Cette commande crée la table <strong>products</strong> dans la base de données, selon la définition
                    de la migration.</p>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Utilisation de l'Eloquent ORM</h2>
            <div class="collapsible-content">
                <p>Eloquent est l'ORM de Laravel, qui permet de manipuler les données de la base de données de manière
                    orientée objet. Un modèle Eloquent correspond à une table dans la base de données.</p>
                <h3>Création d'un modèle Eloquent</h3>
                <p>Pour créer un modèle Eloquent pour la table <strong>products</strong>, vous pouvez utiliser la
                    commande Artisan :</p>
                <pre><code>php artisan make:model Product</code></pre>
                <p>Le modèle <strong>Product</strong> sera créé dans le répertoire <strong>app/Models</strong>. Il est
                    automatiquement
                    lié à la table <strong>products</strong> de la base de données, mais vous pouvez personnaliser cette
                    relation
                    si nécessaire.</p>
                <p>Voici un modèle simple pour la table <strong>products</strong> :</p>
                <pre><code>class Product extends Model
{
    protected $fillable = ['name', 'description', 'price'];
}</code></pre>
                <p>La propriété <strong>$fillable</strong> permet de définir quels attributs du modèle peuvent être
                    mass-assignés
                    (c'est-à-dire modifiés en une seule opération).</p>

                <h3>Opérations CRUD avec Eloquent</h3>
                <p>Eloquent vous permet de réaliser facilement des opérations CRUD (Créer, Lire, Mettre à jour,
                    Supprimer) sur vos
                    données. Voici quelques exemples :</p>
                <ul>
                    <li><strong>Création d'un produit :</strong></li>
                    <pre><code>$product = Product::create([
    'name' => 'Produit A',
    'description' => 'Description du produit A',
    'price' => 100.00,
]);</code></pre>
                    <li><strong>Lecture d'un produit :</strong></li>
                    <pre><code>$product = Product::find(1); // Trouve un produit par son ID</code></pre>
                    <li><strong>Mise à jour d'un produit :</strong></li>
                    <pre><code>$product = Product::find(1);
$product->price = 120.00;
$product->save();</code></pre>
                    <li><strong>Suppression d'un produit :</strong></li>
                    <pre><code>$product = Product::find(1);
$product->delete();</code></pre>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Exercice :</h2>
            <div class="collapsible-content">
                <ul>
                    <li>Créez une table <strong>categories</strong> avec les champs <strong>name</strong> et
                        <strong>description</strong>.
                    </li>
                    <li>Créez un modèle Eloquent <strong>Category</strong> et associez-le à la table
                        <strong>categories</strong>.
                    </li>
                    <li>Ajoutez quelques catégories à votre base de données avec Eloquent.</li>
                    <li>Affichez toutes les catégories dans une vue Blade.</li>
                    <li>Créez une relation entre <strong>Product</strong> et <strong>Category</strong>, pour que chaque
                        produit appartienne à une catégorie.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>