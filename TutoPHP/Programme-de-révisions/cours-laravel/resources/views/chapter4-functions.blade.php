<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 4 - Les fonctions en PHP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 4 - Les fonctions en PHP</h1>
    </header>

    <main>

    <a href="{{ route('home') }}">Retour au Sommaire</a>


        <section class="collapsible"  id="chapter4">
            <h2 class="collapsible-header">Définir une fonction</h2>
            <div class="collapsible-content">
                <p>Les fonctions en PHP permettent de regrouper un ensemble d'instructions que l'on peut réutiliser
                    plusieurs fois. Voici comment définir une fonction :</p>
                <pre><code>function nom_de_la_fonction() {
    // instructions
}</code></pre>
                <p>La fonction est définie avec le mot-clé <code>function</code>, suivi du nom de la fonction, puis des
                    parenthèses. À l'intérieur des accolades, vous pouvez mettre les instructions que la fonction
                    exécutera.</p>
                <h3>Exemple :</h3>
                <pre><code>function dire_bonjour() {
    echo "Bonjour, tout le monde !";
}</code></pre>
                <p>Pour appeler cette fonction, on écrit simplement son nom suivi de parenthèses :
                    <code>dire_bonjour();</code>
                </p>
                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction qui affiche "Bonjour" suivi du nom que vous passez en paramètre (exemple :
                        "Bonjour Alice").</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les paramètres et les arguments</h2>
            <div class="collapsible-content">
                <p>Les fonctions peuvent accepter des paramètres, qui sont des valeurs passées lors de l'appel de la
                    fonction. Les paramètres permettent à la fonction d'agir différemment selon les valeurs qui lui sont
                    fournies.</p>
                <h3>Exemple de fonction avec paramètres :</h3>
                <pre><code>function saluer($prenom) {
    echo "Bonjour, " . $prenom;
}</code></pre>
                <p>Dans cet exemple, la fonction <code>saluer</code> accepte un paramètre <code>$prenom</code>. Lors de
                    l'appel de la fonction, vous devez spécifier une valeur pour ce paramètre :
                    <code>saluer("Alice");</code>
                </p>
                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction <code>additionner</code> qui prend deux nombres en paramètre et retourne leur
                        somme.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les valeurs de retour</h2>
            <div class="collapsible-content">
                <p>Les fonctions peuvent également retourner une valeur à l'aide du mot-clé <code>return</code>. Cela
                    permet de récupérer le résultat d'une fonction pour l'utiliser ailleurs dans le programme.</p>
                <h3>Exemple de fonction avec retour :</h3>
                <pre><code>function multiplier($a, $b) {
    return $a * $b;
}</code></pre>
                <p>Dans cet exemple, la fonction <code>multiplier</code> retourne le produit de <code>$a</code> et
                    <code>$b</code>. Vous pouvez récupérer cette valeur dans une variable :
                </p>
                <pre><code>$resultat = multiplier(2, 3);</code></pre>
                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction <code>calculer_moyenne</code> qui prend un tableau de nombres en paramètre et
                        retourne la moyenne de ces nombres.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les fonctions anonymes</h2>
            <div class="collapsible-content">
                <p>Les fonctions anonymes sont des fonctions qui n'ont pas de nom. Elles sont souvent utilisées pour
                    être passées en argument à d'autres fonctions ou pour être exécutées sur place.</p>
                <h3>Exemple de fonction anonyme :</h3>
                <pre><code>$additionner = function($a, $b) {
    return $a + $b;
};</code></pre>
                <p>Dans cet exemple, nous avons défini une fonction anonyme qui additionne deux nombres. Pour
                    l'utiliser, on l'appelle comme une fonction classique :</p>
                <pre><code>$resultat = $additionner(2, 3);</code></pre>
                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction anonyme qui prend un nombre et l'élève au carré. Utilisez-la pour calculer le
                        carré d'un nombre.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les fonctions variadiques</h2>
            <div class="collapsible-content">
                <p>Les fonctions variadiques sont des fonctions qui peuvent accepter un nombre variable de paramètres.
                    Cela est utile lorsqu'on ne sait pas à l'avance combien d'arguments seront passés à la fonction.</p>
                <h3>Exemple de fonction variadique :</h3>
                <pre><code>function additionnerTousLesNombres(...$nombres) {
    return array_sum($nombres);
}</code></pre>
                <p>Dans cet exemple, la fonction <code>additionnerTousLesNombres</code> peut accepter un nombre variable
                    de paramètres grâce à l'opérateur <code>...</code>. Vous pouvez l'utiliser ainsi :</p>
                <pre><code>$resultat = additionnerTousLesNombres(1, 2, 3, 4);</code></pre>
                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction qui prend un nombre variable de notes et retourne la moyenne de ces notes.
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