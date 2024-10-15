// // // // // // // // // // // // // // Partie 1 :
// // // // // // // // // // // // // // L’instruction let :
// // // // // // // // // // // // // // let monAge = 42;
// // // // // // // // // // // // // // Avec ce code, je viens de déclarer une variable monAge qui possède la valeur 42.

// // // // // // // // // // // // // // Je peux faire évoluer cette valeur en écrivant :
// // // // // // // // // // // // // // monAge = 43;

// // // // // // // // // // // // // // L’instruction const :
// // // // // // // // // // // // // // Dans le code ci-dessous, j’ai déclaré une variable monPrenom qui a comme valeur “David”.
// // // // // // // // // // // // // const monPrenom = "David";

// // // // // // // // // // // // // // L’instruction console.log() :
// // // // // // // // // // // // // let monAge = 42;
// // // // // // // // // // // // // // console.log(monAge);

// // // // // // // // // // // // // // Utilisez des opérateurs :
// // // // // // // // // // // // // // Manipulez des chiffres :
// // // // // // // // // // // // // const entreesPremiereSemaine = 1000;
// // // // // // // // // // // // // const entreesDeuxiemeSemaine = 2000;
// // // // // // // // // // // // // const totalEntrees = entreesPremiereSemaine + entreesDeuxiemeSemaine;

// // // // // // // // // // // // // // console.log(totalEntrees);

// // // // // // // // // // // // // // let placesDejaVendues = 150;
// // // // // // // // // // // // // // placesDejaVendues = placesDejaVendues + 10;

// // // // // // // // // // // // // // let placesDejaVendues = 150;
// // // // // // // // // // // // // // placesDejaVendues += 10;

// // // // // // // // // // // // // // Manipulez des chaînes de caractères :
// // // // // // // // // // // // // let monTitre = "Le titre de mon article";
// // // // // // // // // // // // // let monContenu = "Le contenu de mon article";

// // // // // // // // // // // // // let premierePartie = "Mon nom est Bond";
// // // // // // // // // // // // // let deuxiemePartie = ", James Bond.";
// // // // // // // // // // // // // let punchline = premierePartie + deuxiemePartie;
// // // // // // // // // // // // // // punchline vaut “Mon nom est Bond, James Bond.”

// // // // // // // // // // // // // // Manipulez des booléens :
// // // // // // // // // // // // // let connexionOK = false;

// // // // // // // // // // // // // // Différenciez les types de données :
// // // // // // // // // // // // // let placesDejaVendues = "150";
// // // // // // // // // // // // // placesDejaVendues += "10";
// // // // // // // // // // // // // // console.log(placesDejaVendues);

// // // // // // // // // // // // // // À vous de jouer !

// // // // // // // // // // // // // let totalLivres = 500;

// // // // // // // // // // // // // totalLivres += 50;
// // // // // // // // // // // // // totalLivres -= 10;
// // // // // // // // // // // // // totalLivres += 5;
// // // // // // // // // // // // // // console.log(totalLivres);

// // // // // // // // // // // // // affichageTotalLivres =
// // // // // // // // // // // // //   "Notre bibliothèque possède " + Number(totalLivres) + " livres";
// // // // // // // // // // // // // // console.log(affichageTotalLivres);

// // // // // // // // // // // // // // Déclarez un objet en JavaScript :

// // // // // // // // // // // // // let monPersonnage = {
// // // // // // // // // // // // //   nomPrenom: "Bruce Wayne",
// // // // // // // // // // // // //   age: 35,
// // // // // // // // // // // // //   couleurPreferee: "noir",
// // // // // // // // // // // // //   hobbies: "sortir la nuit",
// // // // // // // // // // // // // };
// // // // // // // // // // // // // // console.log(monPersonnage);

// // // // // // // // // // // // // // Ajoutez une propriété à un objet JavaScript
// // // // // // // // // // // // // monPersonnage.vehiculePrefere = "Batmobile";

// // // // // // // // // // // // // // Accédez à une propriété d’un objet JavaScript
// // // // // // // // // // // // // const nomDeMonPersonnage = monPersonnage.nomPrenom;

// // // // // // // // // // // // // // Vérification
// // // // // // // // // // // // // // console.log(nomDeMonPersonnage);
// // // // // // // // // // // // // // console.log(monPersonnage.nomPrenom);

// // // // // // // // // // // // // // À vous de jouer !
// // // // // // // // // // // // // // const ticketDeCinema = {
// // // // // // // // // // // // // //   nomDuFilm: "Batman",
// // // // // // // // // // // // // //   prixTicket: Number(13),
// // // // // // // // // // // // // //   numSalleDuFilm: Number(2),
// // // // // // // // // // // // // // };
// // // // // // // // // // // // // // console.log(ticketDeCinema);

// // // // // // // // // // // // // let nom = "Mme Naudin";
// // // // // // // // // // // // // // console.log(nom);

// // // // // // // // // // // // // // alert(
// // // // // // // // // // // // // //   "Bonjour " +
// // // // // // // // // // // // // //     nom +
// // // // // // // // // // // // // //     ", votre film " +
// // // // // // // // // // // // // //     ticketDeCinema.nomDuFilm +
// // // // // // // // // // // // // //     " est en salle " +
// // // // // // // // // // // // // //     ticketDeCinema.numSalleDuFilm
// // // // // // // // // // // // // // );

// // // // // // // // // // // // // // let texteAffichage =
// // // // // // // // // // // // // //   "Bonjour " +
// // // // // // // // // // // // // //   nom +
// // // // // // // // // // // // // //   ", votre film " +
// // // // // // // // // // // // // //   ticketDeCinema.nomDuFilm +
// // // // // // // // // // // // // //   " est en salle " +
// // // // // // // // // // // // // //   ticketDeCinema.numSalleDuFilm;
// // // // // // // // // // // // // // console.log(texteAffichage);

// // // // // // // // // // // // // //Regroupez des données grâce aux tableaux
// // // // // // // // // // // // // // Déclarez un tableau en JavaScript :
// // // // // // // // // // // // // // const maCollectionDeFilms = [
// // // // // // // // // // // // // //   "Titanic",
// // // // // // // // // // // // // //   "Jurassic Park",
// // // // // // // // // // // // // //   "Le Seigneur des Anneaux",
// // // // // // // // // // // // // // ];
// // // // // // // // // // // // // // console.log(maCollectionDeFilms);

// // // // // // // // // // // // // // const monFilmPrefere = "Titanic";
// // // // // // // // // // // // // // const monPremierFilm = "Le Seigneur des Anneaux";

// // // // // // // // // // // // // // const maCollectionDeFilms = [monFilmPrefere, monPremierFilm];
// // // // // // // // // // // // // // console.log(maCollectionDeFilms);
// // // // // // // // // // // // // // maCollectionDeFilms vaut ["Titanic", "Le Seigneur des Anneaux"]

// // // // // // // // // // // // // // Accédez à un élément de votre tableau :
// // // // // // // // // // // // // // let premierFilmDuTableau = maCollectionDeFilms[0];
// // // // // // // // // // // // // // console.log(premierFilmDuTableau);

// // // // // // // // // // // // // // Comptez le nombre d’éléments de votre tableau :
// // // // // // // // // // // // // // const nombreDeFilm = maCollectionDeFilms.length;
// // // // // // // // // // // // // // console.log(nombreDeFilm);
// // // // // // // // // // // // // // const maCollectionDeFilms = ["Titanic", "Le Seigneur des Anneaux"];
// // // // // // // // // // // // // // const nombreDeFilms = maCollectionDeFilms.length;
// // // // // // // // // // // // // // console.log(nombreDeFilms);
// // // // // // // // // // // // // // nombreDeFilms vaut 2

// // // // // // // // // // // // // Ajoutez des données grâce à la méthode push :
// // // // // // // // // // // // // let mesFilms = ["Titanic", "Jurassic Park"];
// // // // // // // // // // // // // mesFilms.push();
// // // // // // // // // // // // // console.log(mesFilms);
// // // // // // // // // // // // // mesFilms vaut ["Titanic", "Jurassic Park", "Retour vers le Futur"]

// // // // // // // // // // // // // let mesFilms = ["Titanic", "Jurassic Park", "Retour vers le futur"];
// // // // // // // // // // // // // mesFilms.pop();
// // // // // // // // // // // // // console.log(mesFilms);
// // // // // // // // // // // // // mesFilms vaut ["Titanic", "Jurassic Park"]

// // // // // // // // // // // // // Distinguez les copies par “valeur” et par “référence”
// // // // // // // // // // // // // Copie par valeur
// // // // // // // // // // // // let variableSimple1 = 25;
// // // // // // // // // // // // let variableSimple2 = variableSimple1;

// // // // // // // // // // // // // La copie par référence
// // // // // // // // // // // // let variableComplexe1 = ["pomme", "cerise"];
// // // // // // // // // // // // let variableComplexe2 = variableComplexe1;

// // // // // // // // // // // ////////////////////
// // // // // // // // // // // // Copie par valeur
// // // // // // // // // // // ////////////////////
// // // // // // // // // // // let variableSimple1 = 25;
// // // // // // // // // // // let variableSimple2 = variableSimple1;

// // // // // // // // // // // variableSimple2 = 30;

// // // // // // // // // // // // Le console.log va afficher 25, le fait d’avoir changé la valeur de variableSimple2 ne change rien pour variableSimple1
// // // // // // // // // // // console.log("variableSimple1", variableSimple1);
// // // // // // // // // // // console.log("variableSimple2", variableSimple2);

// // // // // // // // // // // ///////////////////////
// // // // // // // // // // // // Copie par référence
// // // // // // // // // // // ///////////////////////
// // // // // // // // // // // let variableComplexe1 = ["pomme", "cerise"];
// // // // // // // // // // // let variableComplexe2 = variableComplexe1;
// // // // // // // // // // // let variableComplexe3 = [...variableComplexe1];

// // // // // // // // // // // variableComplexe2.push("poire");

// // // // // // // // // // // // Le console.log va afficher pomme cerise ET poire. On a modifié la seconde variable, mais le contenu de la première a été changé aussi, parce que c’est le même contenu.
// // // // // // // // // // // console.log("variableComplexe1", variableComplexe1);
// // // // // // // // // // // console.log("variableComplexe2", variableComplexe2);
// // // // // // // // // // // console.log("variableComplexe3", variableComplexe3);

// // // // // // // // // // // À vous de jouer !

// // // // // // // // // // let playlist = ["morceau1", "morceau2", "morceau3"];
// // // // // // // // // // // console.log(playlist);
// // // // // // // // // // const totalMorceaux = playlist.length;
// // // // // // // // // // // console.log(totalMorceaux);

// // // // // // // // // // playlist.push("morceau4", "morceau5");
// // // // // // // // // // // console.log(playlist);

// // // // // // // // // // playlist.pop();
// // // // // // // // // // // console.log(playlist);

// // // // // // // // // // Organisez votre code grâce aux blocs de code :

// // // // // // // // // {
// // // // // // // // //   const monChiffre = 4;
// // // // // // // // //   console.log(monChiffre);
// // // // // // // // // }
// // // // // // // // // console.log("Hello world");

// // // // // // // // // // // ///////////////////////// // // ////////////////////
// // // // // // // // // Pseudo code pour l'application d'écriture :
// // // // // // // // // // // ///////////////////////// // // ////////////////////

// // // // // // // // // // Étape 1 : L’application propose un mot.
// // // // // // // // // let mot = int(input());
// // // // // // // // // let motDeUtilisateur = int(input());
// // // // // // // // // nbPoint = 0;
// // // // // // // // // // Étape 2 : L’utilisateur tape ce mot au clavier.
// // // // // // // // // let tapeAuClavier = true;

// // // // // // // // // // Étape 3 : Si le mot de l’utilisateur est exactement le même que le mot de l’application, alors on ajoute un point au score.

// // // // // // // // // // Étape 4 : On passe au mot suivant.
// // // // // // // // // for (if motDeUtilisateur === mot) {
// // // // // // // // //     nbPoint += 1
// // // // // // // // // } else {
// // // // // // // // //     nbPoint = 0
// // // // // // // // // }
// // // // // // // // // // Étape 5 : On recommence à l’étape 1, jusqu’à ce que le temps soit écoulé.
// // // // // // // // // while (temps === 0){}
// // // // // // // // // console.log(mot)

// // // // // // // // // let motTapeOk = false;

// // // // // // // // // if (motTapeOk) {
// // // // // // // // //   console.log("Yes, tu es un futur champion 😃");
// // // // // // // // //   //code exécuté si la condition est vraie
// // // // // // // // // } else {
// // // // // // // // //   console.log("Sorry, mais là, tu dois bachoter, peux mieux faire 😱");
// // // // // // // // //   //code non exécuté si la condition est fausse
// // // // // // // // // }

// // // // // // // // // Si on ne veut pas afficher de messages quand c'est faux :
// // // // // // // // // let motTapeOk = false; // Essayez de mettre false à la place de true

// // // // // // // // // if (motTapeOk) {
// // // // // // // // //   console.log("Bravo, vous avez correctement tapé le mot");
// // // // // // // // // }

// // // // // // // // // Rédigez un test avec des opérateurs de comparaison :
// // // // // // // // // let motUtilisateur = prompt(
// // // // // // // // //   "Entre vite un mot, mais attention, pas de faute, sinon, pas de point :"
// // // // // // // // // );
// // // // // // // // // console.log(motUtilisateur);

// // // // // // // // console.log(motUtilisateur);

// // // // // // // // if (motUtilisateur === motApplication) {
// // // // // // // //   console.log("Bien joué !");
// // // // // // // // } else {
// // // // // // // //   console.log("Nan mais ... tu le fais exprès !");
// // // // // // // // }

// // // // // // // // Utilisez la condition switch/case pour gérer plusieurs réponses :
// // // // // // // // const motApplication = "Ciouciou";

// // // // // // // // let motUtilisateur = prompt(
// // // // // // // //   "Sois bien attentif et écris le mot " + motApplication
// // // // // // // // );

// // // // // // // // if (motUtilisateur === motApplication) {
// // // // // // // //   console.log("Ciouciou");
// // // // // // // // } else {
// // // // // // // //   if (motUtilisateur === "Gredin") {
// // // // // // // //     console.log("Restez correct !");
// // // // // // // //   } else {
// // // // // // // //     if (motUtilisateur === "Mécréant") {
// // // // // // // //       console.log("Heu .. tu sais pas lire ?! Sois poli wesh !");
// // // // // // // //     } else {
// // // // // // // //       if (motUtilisateur === "Vilain") {
// // // // // // // //         console.log("T'es pas fufute toi hein...");
// // // // // // // //       } else {
// // // // // // // //         console.log("Essaye encore");
// // // // // // // //       }
// // // // // // // //     }
// // // // // // // //   }
// // // // // // // // }

// // // // // // // // switch (motUtilisateur) {
// // // // // // // //   case motApplication:
// // // // // // // //
// // // // // // // //     break;
// // // // // // // //   case "Gredin":
// // // // // // // //     console.log("Heu..ok..");
// // // // // // // //     break;
// // // // // // // //   case "Mécréant":
// // // // // // // //     console.log("Heu..ok..");
// // // // // // // //     break;
// // // // // // // //   case "Vilain":
// // // // // // // //     console.log("Heu..ok..");
// // // // // // // //     break;
// // // // // // // //   default:
// // // // // // // //     console.log("Essaye encore");
// // // // // // // // }

// // // // // // // // À vous de jouer !
// // // // // // // // Étape 1 : Testez le premier mot

// // // // // // // //pseudo code :
// // // // // // // // si l'utilisateur rentre le mot de la première case du tableau le score augmente de 1
// // // // // // // const listeMots = ["Cachalot", "Pétunia", "Serviette"];
// // // // // // // let score = 0;

// // // // // // // let motUtilisateur = prompt("Ecrivez le mot : " + listeMots[0]);

// // // // // // // if (motUtilisateur === listeMots[0]) {
// // // // // // //   score++;
// // // // // // // }

// // // // // // // motUtilisateur = prompt("Ecrivez le mot : " + listeMots[1]);
// // // // // // // if (motUtilisateur === listeMots[1]) {
// // // // // // //   score++;
// // // // // // // }

// // // // // // // motUtilisateur = prompt("Ecrivez le mot : " + listeMots[2]);
// // // // // // // if (motUtilisateur === listeMots[2]) {
// // // // // // //   score++;
// // // // // // // }

// // // // // // // console.log(score);

// // // // // // // Utilisez l’instruction for pour répéter du code un certain nombre de fois :
// // // // // // for (let compteur = 0; compteur < 3; compteur++) {
// // // // // //   console.log(compteur);
// // // // // // }

// // // // // // Première instruction :
// // // // // let compteur = 0;

// // // // // // Deuxième instruction :
// // // // // compteur < 3;

// // // // // // Troisième instruction :
// // // // // for (let i = 0; i < 3; i++) {
// // // // //   console.log(i);
// // // // // }

// // // // // Utilisez l’instruction while pour répéter du code :
// // // // let i = 0;

// // // // while (i < 3) {
// // // //   console.log(i);
// // // //   i++;
// // // // }

// //////////////////////////////////////////////////////////////////////////////////////
// // À vous de jouer !
// //////////////////////////////////////////////////////////////////////////////////////

// //////////////////////////////////////////////////////////////////////////////////////
// //Correction
// //////////////////////////////////////////////////////////////////////////////////////

// // // Déclaration des tableaux contenant les listes des mots proposés à l'utilisateur

// Déclaration de la variable contenant le choix de l'utilisateur
// let choix = prompt(
//   "Avec quelle liste désirez-vous jouer : 'mots' ou 'phrases' ?"
// );
// Tant que l'utilisateur n'a pas saisi "mots" ou "phrases", on lui redemande de saisir un choix
// while (choix !== "mots" && choix !== "phrases") {
//   choix = prompt(
//     "Avec quelle liste désirez-vous jouer : 'mots' ou 'phrases' ?"
//   );
// }

// // A noter : ce n'est pas la seule réponse valide pour cet exercice, il en existe d'autres plus optimisées,
// // mais nous verrons cela dans les prochains chapitres.
