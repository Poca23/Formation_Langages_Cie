<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 5 - Variables et Types de données</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 5 - Variables et Types de données</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Qu'est-ce qu'une variable en PHP ?</h2>
            <div class="collapsible-content">
                <p>En PHP, une variable est un conteneur qui permet de stocker des informations (comme des nombres, des
                    chaînes de texte, etc.). Elle est représentée par un nom précédé du signe dollar (<code>$</code>),
                    suivi du nom de la variable. Par exemple :</p>
                <pre><code>$nom = "John";</code></pre>
                <p>Dans cet exemple, la variable <code>$nom</code> contient la chaîne de caractères <code>"John"</code>.
                </p>

                <h3>Les règles de nommage des variables :</h3>
                <ul>
                    <li>Le nom de la variable doit commencer par un signe dollar (<code>$</code>), suivi d'une lettre ou
                        d'un underscore (<code>_</code>).</li>
                    <li>Le reste du nom peut être composé de lettres, de chiffres et d'underscores.</li>
                    <li>Les variables sont sensibles à la casse (c'est-à-dire que <code>$nom</code> et <code>$Nom</code>
                        sont deux variables différentes).</li>
                </ul>

                <h3>Exemple :</h3>
                <p>Voici un exemple simple de variable :</p>
                <pre><code>$age = 30;
$nom = "Alice";
echo $nom . " a " . $age . " ans.";  // Affiche : Alice a 30 ans</code></pre>
                <p>Dans cet exemple, nous avons deux variables : <code>$age</code> et <code>$nom</code>. En utilisant
                    <code>echo</code>, nous affichons une phrase qui combine les valeurs des variables.
                </p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez deux variables : une pour votre prénom et une pour votre âge. Affichez ensuite une phrase
                        du type : "Bonjour, je m'appelle [prénom] et j'ai [âge] ans."</li>
                    <li>Essayez de modifier les valeurs des variables et d'afficher une nouvelle phrase avec les
                        nouvelles informations.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les types de données en PHP</h2>
            <div class="collapsible-content">
                <p>PHP prend en charge plusieurs types de données pour les variables. Ces types de données peuvent être
                    divisés en deux catégories : les types primitifs et les types complexes.</p>

                <h3>Types primitifs :</h3>
                <ul>
                    <li><strong>Entiers (Integer) :</strong> Ce sont des nombres entiers, positifs ou négatifs, sans
                        décimales. Exemple : <code>$age = 30;</code></li>
                    <li><strong>Flottants (Float ou Double) :</strong> Ce sont des nombres à virgule flottante (avec des
                        décimales). Exemple : <code>$prix = 19.99;</code></li>
                    <li><strong>Chaînes de caractères (String) :</strong> Ce sont des séquences de caractères entourées
                        de guillemets ou d'apostrophes. Exemple : <code>$nom = "Alice";</code></li>
                    <li><strong>Booléens (Boolean) :</strong> Ce sont des valeurs de vérité : <code>true</code> ou
                        <code>false</code>. Exemple : <code>$estAdmin = true;</code>
                    </li>
                    <li><strong>Tableaux (Array) :</strong> Un tableau permet de stocker plusieurs valeurs sous un même
                        nom de variable. Exemple : <code>$couleurs = array("rouge", "vert", "bleu");</code></li>
                    <li><strong>Objets (Object) :</strong> Ce sont des instances de classes. Nous aborderons ce type
                        plus tard, avec la programmation orientée objet.</li>
                </ul>

                <h3>Exemple de type de données :</h3>
                <p>Voici des exemples de chaque type de données :</p>
                <pre><code>$age = 25;  // Integer
$prix = 15.75;  // Float
$nom = "Bob";  // String
$estAdmin = true;  // Boolean
$couleurs = array("rouge", "vert", "bleu");  // Array
</code></pre>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une variable de chaque type de données listé ci-dessus (Integer, Float, String, Boolean,
                        Array).</li>
                    <li>Affichez ces variables avec la fonction <code>echo</code> pour vérifier leur contenu.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les constantes en PHP</h2>
            <div class="collapsible-content">
                <p>Une constante est une valeur qui ne peut pas être modifiée une fois qu'elle a été définie.
                    Contrairement aux variables, les constantes ne commencent pas par un signe dollar (<code>$</code>).
                </p>
                <p>Vous pouvez définir une constante en utilisant la fonction <code>define()</code>. Par exemple :</p>
                <pre><code>define("PI", 3.14159);</code></pre>
                <p>Dans cet exemple, la constante <code>PI</code> contient la valeur de Pi. Une fois définie, vous ne
                    pouvez pas changer sa valeur dans le script.</p>

                <h3>Exemple de constante :</h3>
                <pre><code>define("GREETING", "Bonjour tout le monde!");
echo GREETING;  // Affiche : Bonjour tout le monde!</code></pre>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une constante <code>MON_NOM</code> et affectez-lui votre prénom. Affichez ensuite cette
                        constante avec la fonction <code>echo</code>.</li>
                    <li>Essayez de modifier la valeur de la constante après sa définition. Que se passe-t-il ?</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>