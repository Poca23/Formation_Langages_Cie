<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 7 - Fonctions en PHP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 7 - Fonctions en PHP</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Déclaration d'une fonction en PHP</h2>
            <div class="collapsible-content">
                <p>Une fonction en PHP permet de regrouper un ensemble d'instructions sous un même nom, que vous pouvez
                    appeler pour exécuter ce bloc de code à tout moment dans votre script.</p>
                <p>La déclaration d'une fonction se fait avec le mot-clé <code>function</code>, suivi du nom de la
                    fonction, puis des parenthèses contenant les paramètres (si nécessaire) et d'accolades contenant le
                    code à exécuter.</p>

                <h3>Exemple de fonction simple :</h3>
                <pre><code>function direBonjour() {
    echo "Bonjour tout le monde!";
}

direBonjour();  // Appel de la fonction</code></pre>
                <p>Dans cet exemple, nous avons créé une fonction nommée <code>direBonjour</code> qui affiche un
                    message. Nous avons ensuite appelé cette fonction en écrivant simplement son nom suivi de
                    parenthèses.</p>

                <h3>Fonction avec paramètres :</h3>
                <p>Les fonctions peuvent prendre des paramètres pour personnaliser leur comportement. Ces paramètres
                    sont définis dans les parenthèses lors de la déclaration de la fonction.</p>
                <pre><code>function direBonjourNom($nom) {
    echo "Bonjour, " . $nom;
}

direBonjourNom("Alice");  // Affiche "Bonjour, Alice"</code></pre>
                <p>La fonction <code>direBonjourNom</code> prend un paramètre <code>$nom</code> et l'utilise dans le
                    message.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Déclarez une fonction <code>calculerSomme</code> qui prend deux paramètres numériques et
                        retourne leur somme.</li>
                    <li>Appelez cette fonction avec deux valeurs et affichez le résultat.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Valeurs de retour d'une fonction</h2>
            <div class="collapsible-content">
                <p>Une fonction peut renvoyer une valeur à l'endroit où elle est appelée. Cela permet de récupérer un
                    résultat calculé à l'intérieur de la fonction.</p>

                <h3>Exemple de fonction avec retour :</h3>
                <pre><code>function addition($a, $b) {
    return $a + $b;
}

$resultat = addition(5, 3);  // Le résultat de l'addition est 8
echo $resultat;</code></pre>
                <p>La fonction <code>addition</code> prend deux paramètres, calcule leur somme, et retourne ce résultat
                    avec le mot-clé <code>return</code>.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction <code>calculerMoyenne</code> qui prend un tableau de nombres et retourne la
                        moyenne de ces nombres.</li>
                    <li>Appelez la fonction avec un tableau d'exemple et affichez le résultat.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Fonctions avec valeurs par défaut</h2>
            <div class="collapsible-content">
                <p>Les fonctions peuvent avoir des paramètres avec des valeurs par défaut. Si vous ne fournissez pas un
                    argument pour un paramètre, la valeur par défaut sera utilisée.</p>

                <h3>Exemple de fonction avec valeur par défaut :</h3>
                <pre><code>function saluer($nom = "Invité") {
    echo "Bonjour, " . $nom;
}

saluer();          // Affiche "Bonjour, Invité"
saluer("Alice");   // Affiche "Bonjour, Alice"</code></pre>
                <p>La fonction <code>saluer</code> a un paramètre <code>$nom</code> avec une valeur par défaut "Invité".
                    Si aucun nom n'est passé, "Invité" est utilisé.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une fonction <code>afficherMessage</code> qui prend deux paramètres : un message et un
                        nombre de répétitions. Utilisez une valeur par défaut de 1 pour le nombre de répétitions.</li>
                    <li>Affichez le message un nombre de fois spécifié, ou une fois si le nombre de répétitions n'est
                        pas fourni.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Portée des variables dans les fonctions</h2>
            <div class="collapsible-content">
                <p>La portée d'une variable définit l'endroit où elle peut être utilisée dans un programme. Une variable
                    déclarée dans une fonction est locale à cette fonction, et ne peut pas être utilisée en dehors de
                    celle-ci.</p>

                <h3>Variables locales :</h3>
                <pre><code>function test() {
    $x = 5;  // Variable locale à la fonction
    echo $x;
}

test();  // Affiche 5
echo $x;  // Erreur : $x n'est pas défini en dehors de la fonction</code></pre>
                <p>La variable <code>$x</code> est définie à l'intérieur de la fonction <code>test()</code> et n'est pas
                    accessible en dehors.</p>

                <h3>Variables globales :</h3>
                <p>Les variables définies en dehors des fonctions sont dites globales. Elles peuvent être utilisées dans
                    les fonctions, mais vous devez utiliser le mot-clé <code>global</code> pour y accéder.</p>
                <pre><code>$x = 10;

function testGlobal() {
    global $x;
    echo $x;
}

testGlobal();  // Affiche 10</code></pre>

                <h3>Exercice :</h3>
                <ul>
                    <li>Déclarez une variable globale <code>$compteur</code> et une fonction qui incrémente cette
                        variable à chaque appel.</li>
                    <li>Affichez la valeur de la variable avant et après chaque appel de la fonction.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>