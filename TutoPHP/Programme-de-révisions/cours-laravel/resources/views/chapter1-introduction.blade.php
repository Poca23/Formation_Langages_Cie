<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 1 - Introduction à PHP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Chapitre 1 - Introduction à PHP</h1>
        
    </header>
    
    <main>
        
    <a href="{{ route('home') }}">Retour au Sommaire</a>

        <section class="collapsible" id="chapter1">
            <h2 class="collapsible-header">Qu'est-ce que PHP ?</h2>
            <div class="collapsible-content">
                <p>PHP (Hypertext Preprocessor) est un langage de programmation serveur, principalement utilisé pour le
                    développement de sites web dynamiques. Il permet d'exécuter des scripts sur le serveur avant
                    d'envoyer les résultats au navigateur de l'utilisateur. Contrairement au HTML, qui est un langage de
                    balisage statique, PHP permet de générer des pages web qui peuvent changer en fonction de
                    l'utilisateur ou des données stockées sur un serveur, comme dans les forums, les réseaux sociaux, ou
                    les sites de commerce en ligne.</p>

                <p>Le code PHP est intégré directement dans des pages HTML, et il est généralement exécuté sur un
                    serveur web. Par exemple, un formulaire soumis par l'utilisateur peut être traité en PHP pour
                    stocker des informations dans une base de données.</p>

                <p>PHP est très populaire pour sa simplicité d'utilisation, sa compatibilité avec la plupart des
                    serveurs web et sa capacité à s'intégrer facilement à des bases de données, comme MySQL.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Qu'est-ce que PHP ? Donnez une brève explication.</li>
                    <li>Pourquoi PHP est-il un langage populaire pour le développement web ?</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Pourquoi utiliser PHP pour le développement web ?</h2>
            <div class="collapsible-content">
                <p>PHP est utilisé dans de nombreux projets web, car il offre plusieurs avantages :</p>
                <ul>
                    <li><strong>Facilité d'intégration :</strong> PHP peut être directement intégré dans un fichier
                        HTML. Cela permet d'alterner facilement entre le code statique (HTML) et le code dynamique (PHP)
                        dans un même fichier.</li>
                    <li><strong>Open source et gratuit :</strong> PHP est un langage open-source, ce qui signifie qu'il
                        est libre d'utilisation. Il bénéficie d'une large communauté de développeurs qui contribuent à
                        son amélioration et à la création de bibliothèques et d'outils pour simplifier le développement.
                    </li>
                    <li><strong>Large compatibilité :</strong> PHP fonctionne sur presque tous les serveurs et systèmes
                        d'exploitation. Vous pouvez l'utiliser aussi bien sur Windows, Linux que macOS.</li>
                    <li><strong>Interaction avec les bases de données :</strong> PHP permet une intégration facile avec
                        des bases de données, comme MySQL, ce qui est essentiel pour créer des applications web
                        interactives qui nécessitent de stocker et de manipuler des données utilisateur (ex : profils,
                        articles de blog, etc.).</li>
                    <li><strong>Support pour les frameworks populaires :</strong> PHP offre des frameworks comme
                        Laravel, Symfony, et CodeIgniter qui permettent de gagner du temps et de simplifier le processus
                        de développement d'applications web complexes.</li>
                </ul>

                <h3>Exercice :</h3>
                <ul>
                    <li>Citez au moins deux raisons pour lesquelles PHP est souvent choisi pour le développement de
                        sites web dynamiques.</li>
                    <li>Comparez PHP avec un autre langage de programmation côté serveur que vous connaissez (par
                        exemple, Python ou Node.js). Quelles sont les différences majeures ?</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Installation de PHP (local ou via un serveur comme XAMPP)</h2>
            <div class="collapsible-content">
                <p>Avant de commencer à coder avec PHP, il est nécessaire de configurer votre environnement de
                    développement. Voici les deux options les plus courantes :</p>

                <h3>1. Installation locale de PHP</h3>
                <p>Pour développer des applications PHP sur votre propre machine, vous devez installer PHP ainsi qu'un
                    serveur web (comme Apache) et une base de données (comme MySQL). Voici les étapes :</p>
                <ol>
                    <li><strong>Télécharger PHP :</strong> Allez sur le site officiel de PHP (https://www.php.net/) et
                        téléchargez la version la plus récente de PHP pour votre système d'exploitation (Windows, macOS,
                        Linux).</li>
                    <li><strong>Configurer le serveur web :</strong> PHP a besoin d'un serveur web pour exécuter vos
                        scripts. Vous pouvez utiliser Apache ou Nginx, mais l'installation manuelle de ces serveurs peut
                        être complexe si vous débutez. C'est pourquoi de nombreux développeurs préfèrent utiliser des
                        outils comme XAMPP ou WAMP.</li>
                </ol>

                <h3>2. Installation avec XAMPP (pour Windows, macOS et Linux)</h3>
                <p>XAMPP est un package gratuit qui comprend Apache, MySQL, PHP et Perl, et qui vous permet de
                    configurer facilement un environnement local pour développer avec PHP. Suivez ces étapes pour
                    l'installer :</p>
                <ol>
                    <li><strong>Télécharger XAMPP :</strong> Allez sur https://www.apachefriends.org/ et téléchargez la
                        version correspondant à votre système d'exploitation.</li>
                    <li><strong>Installer XAMPP :</strong> Lancez le fichier d'installation et suivez les instructions
                        pour installer XAMPP sur votre machine.</li>
                    <li><strong>Démarrer XAMPP :</strong> Ouvrez le panneau de contrôle XAMPP et démarrez Apache et
                        MySQL. Cela vous permettra de commencer à exécuter vos scripts PHP et de gérer vos bases de
                        données.</li>
                    <li><strong>Accéder à PHP :</strong> Créez un fichier PHP dans le répertoire "htdocs" de XAMPP, et
                        accédez-y via votre navigateur (par exemple : http://localhost/monfichier.php).</li>
                </ol>

                <h3>Exercice :</h3>
                <ul>
                    <li>Installez PHP sur votre machine à l'aide de XAMPP (ou un autre serveur local).</li>
                    <li>Vérifiez l'installation en exécutant la commande <code>php -v</code> dans le terminal.</li>
                </ul>
            </div>
        </section>

        <section class="collapsible">
            <h2 class="collapsible-header">Premier script PHP : "Hello World"</h2>
            <div class="collapsible-content">
                <p>Maintenant que PHP est installé, il est temps d'écrire votre premier script ! Pour cela, créez un
                    fichier PHP et affichez un simple message à l'écran.</p>

                <h3>Le code PHP de base :</h3>
                <p>Créez un fichier nommé <code>index.php</code> et ajoutez-y ce code :</p>
                <pre><code>&lt;?php
echo "Hello World!";
?&gt;</code></pre>
                <p>Voici ce que fait chaque partie du code :</p>
                <ul>
                    <li><strong>&lt;?php ... ?&gt;</strong> : C'est la balise PHP qui permet d'encapsuler le code PHP
                        dans un fichier. Tout ce qui est entre ces balises est exécuté par le serveur.</li>
                    <li><strong>echo</strong> : La fonction <code>echo</code> permet d'afficher du texte à l'écran. Ici,
                        elle va afficher la phrase "Hello World!".</li>
                </ul>

                <p>Une fois votre fichier créé, vous pouvez l'exécuter dans votre navigateur en allant à l'adresse
                    suivante : <code>http://localhost/index.php</code>. Vous devriez voir s'afficher le message "Hello
                    World!" à l'écran.</p>

                <h3>Exercice :</h3>
                <ul>
                    <li>Créez un fichier PHP appelé <code>hello.php</code> et affichez le message "Hello, World!".</li>
                    <li>Testez votre script en ouvrant le fichier dans un navigateur via votre serveur local.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Cours PHP et Laravel - CND</p>
    </footer>
</body>

</html>