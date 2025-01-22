<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 6 - Structures de contrôle en PHP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 6 - Structures de contrôle en PHP</h1>
    </header>

    <main>

        <section class="collapsible">
            <h2 class="collapsible-header">Les instructions conditionnelles (if, else, elseif)</h2>
            <div class="collapsible-content">
                <p>Les structures conditionnelles permettent d'exécuter certaines instructions en fonction de la
                    vérification d'une condition. En PHP, l'instruction la plus courante pour cela est <code>if</code>.
                </p>

                <h3>La structure <code>if</code> :</h3>
                <p>La structure <code>if</code> permet de tester une condition. Si la condition est vraie, le code à
                    l'intérieur des accolades est exécuté.</p>
                <pre><code>$age = 18;
if ($age >= 18) {
    echo "Vous êtes majeur.";
}</code></pre>

                <h3>La structure <code>else</code> :</h3>
                <p>La structure <code>else</code> est utilisée en complément du <code>if</code> pour exécuter une autre
                    partie du code si la condition est fausse.</p>
                <pre><code>$age = 16;
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}</code></pre>

                <h3>La structure <code>elseif</code> :</h3>
                <p>Si plusieurs conditions doivent être testées, vous pouvez utiliser <code>elseif</code> pour tester
                    une condition supplémentaire si la première est fausse.</p>
                <pre><code>$age = 20;
if ($age < 18) {
    echo "Vous êtes mineur.";
} elseif ($age >= 18 && $age < 65) {
    echo "Vous êtes adulte.";
} else {
    echo "Vous êtes senior.";
}</code></pre>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une variable <code>$age</code> et attribuez-lui votre âge.</li>
                    <li>Utilisez une structure <code>if</code> pour afficher un message indiquant si vous êtes mineur,
                        adulte ou senior en fonction de votre âge.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Les boucles en PHP (for, while, foreach)</h2>
            <div class="collapsible-content">
                <p>Les boucles permettent d'exécuter un bloc de code plusieurs fois de manière répétée. PHP propose
                    plusieurs types de boucles :</p>

                <h3>La boucle <code>for</code> :</h3>
                <p>La boucle <code>for</code> est utilisée lorsque vous savez à l'avance combien de fois vous souhaitez
                    répéter le code. Elle contient trois parties :</p>
                <ul>
                    <li>Initialisation : une fois au début de la boucle.</li>
                    <li>Condition : la boucle continue tant que cette condition est vraie.</li>
                    <li>Incrémentation : elle s'exécute à chaque itération pour modifier la variable de contrôle.</li>
                </ul>
                <pre><code>for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}</code></pre>
                <p>Cet exemple affiche les nombres de 0 à 4.</p>

                <h3>La boucle <code>while</code> :</h3>
                <p>La boucle <code>while</code> continue tant que la condition est vraie. Elle est utilisée lorsque vous
                    ne savez pas à l'avance combien de fois la boucle doit s'exécuter.</p>
                <pre><code>$i = 0;
while ($i < 5) {
    echo $i . "<br>";
    $i++;
}</code></pre>
                <p>Cet exemple fait la même chose que la boucle <code>for</code> ci-dessus, mais d'une manière
                    différente.</p>

                <h3>La boucle <code>foreach</code> :</h3>
                <p>La boucle <code>foreach</code> est spécialement conçue pour parcourir les éléments d'un tableau. Elle
                    est très pratique pour traiter des tableaux sans avoir besoin d'un index explicite.</p>
                <pre><code>$couleurs = array("rouge", "vert", "bleu");
foreach ($couleurs as $couleur) {
    echo $couleur . "<br>";
}</code></pre>
                <p>Dans cet exemple, la boucle parcourt chaque élément du tableau et l'affiche.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez un tableau contenant les jours de la semaine.</li>
                    <li>Utilisez une boucle <code>foreach</code> pour afficher tous les jours du tableau.</li>
                    <li>Ensuite, utilisez une boucle <code>for</code> pour afficher les mêmes jours, mais avec un index
                        devant chaque jour (par exemple : "1. Lundi", "2. Mardi", etc.).</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">L'instruction <code>switch</code> en PHP</h2>
            <div class="collapsible-content">
                <p>La structure <code>switch</code> est une alternative aux structures <code>if</code> et
                    <code>elseif</code> lorsque vous avez plusieurs conditions à tester sur une même variable.
                </p>
                <pre><code>$jour = "Lundi";
switch ($jour) {
    case "Lundi":
        echo "C'est le début de la semaine.";
        break;
    case "Vendredi":
        echo "C'est presque le week-end.";
        break;
    default:
        echo "C'est un jour quelconque.";
}</code></pre>
                <p>Dans cet exemple, la variable <code>$jour</code> est comparée à différentes valeurs possibles. Si une
                    correspondance est trouvée, le code correspondant est exécuté. Le mot-clé <code>break</code> permet
                    de sortir de la structure <code>switch</code> une fois qu'une correspondance est trouvée.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez une variable <code>$jour</code> et affectez-lui un jour de la semaine.</li>
                    <li>Utilisez un <code>switch</code> pour afficher un message personnalisé en fonction du jour de la
                        semaine.</li>
                    <li>Ajoutez un cas <code>default</code> pour gérer les autres jours non mentionnés dans les
                        <code>case</code>.
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