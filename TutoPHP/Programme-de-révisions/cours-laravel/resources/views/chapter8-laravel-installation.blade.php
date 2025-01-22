<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 8 - Introduction aux bases de données avec MySQL</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 8 - Introduction aux bases de données avec MySQL</h1>
    </header>

    <main>

    <a href="{{ route('home') }}">Retour au Sommaire</a>


        <section class="collapsible"  id="chapter8">
            <h2 class="collapsible-header">Connexion à une base de données MySQL avec PHP</h2>
            <div class="collapsible-content">
                <p>Avant de pouvoir interagir avec une base de données MySQL, nous devons établir une connexion. Cela se
                    fait
                    en utilisant la fonction <code>mysqli_connect()</code>.</p>

                <h3>Exemple de connexion :</h3>
                <pre><code>$conn = mysqli_connect("localhost", "utilisateur", "motdepasse", "base_de_donnees");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
echo "Connexion réussie";</code></pre>
                <p>Dans cet exemple, nous tentons de nous connecter à la base de données. Si la connexion échoue, un
                    message d'erreur est affiché.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Écrivez un script PHP qui tente de se connecter à une base de données appelée
                        <code>mon_blog</code> avec les identifiants appropriés.
                    </li>
                    <li>Affichez un message de succès si la connexion est réussie, sinon affichez un message d'erreur.
                    </li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Création, lecture, mise à jour et suppression des enregistrements</h2>
            <div class="collapsible-content">
                <p>Une fois la connexion établie, vous pouvez effectuer des opérations de lecture, d'ajout, de mise à
                    jour et de suppression
                    (les opérations CRUD) sur les enregistrements de la base de données.</p>

                <h3>Exemple de requête SELECT (Lecture) :</h3>
                <pre><code>$sql = "SELECT * FROM articles";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['titre'] . "<br>";
}</code></pre>
                <p>Dans cet exemple, nous sélectionnons tous les articles de la table <code>articles</code> et affichons
                    leurs titres.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Écrivez une requête qui sélectionne tous les enregistrements d'une table
                        <code>utilisateurs</code> et affiche les noms des utilisateurs.
                    </li>
                    <li>Ajoutez un bouton dans votre page HTML pour afficher les résultats de la requête en utilisant
                        PHP.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Préparation des requêtes sécurisées avec MySQL</h2>
            <div class="collapsible-content">
                <p>Il est important de sécuriser vos requêtes afin d'éviter les injections SQL. Cela peut être réalisé
                    en préparant les requêtes avec la fonction <code>mysqli_prepare()</code>.</p>

                <h3>Exemple de requête préparée :</h3>
                <pre><code>$stmt = mysqli_prepare($conn, "SELECT * FROM utilisateurs WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);  // "i" pour un entier
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nom'] . "<br>";
}</code></pre>
                <p>Dans cet exemple, nous utilisons une requête préparée pour sécuriser l'entrée d'un utilisateur.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez un formulaire HTML pour rechercher un utilisateur par son <code>id</code> et affichez son
                        nom en utilisant une requête préparée.</li>
                    <li>Assurez-vous que l'entrée de l'utilisateur est correctement sécurisée contre les injections SQL.
                    </li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>