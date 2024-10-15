// ////////////////////////////////////////////
// // Organisez Votre code Grace Aux Fonctions
// ////////////////////////////////////////////

// // Découvrez les fonctions :
// // motUtilisateur = prompt("Entrez un mot");

// // Rédigez une fonction en JavaScript :
// // function retournerMessageScore(score, nombreQuestions) {
// //   let message = "Votre score est de " + score + " sur " + nombreQuestions;
// //   return message;
// // }

// // let nouveauMessage = retournerMessageScore(5, 10);
// // console.log(nouveauMessage);

// // Nommez clairement vos paramètres :
// // lancerJeu(a) {
// //     // code
// // };

// // lancerJeu(listeMots) {
// //     // code
// // };

// // Maîtrisez la portée des variables :
// let monNombre = 1;
// // monNombre est une variable globale, car elle est déclarée en dehors d’un bloc de code

// function afficheUnNombre() {
//   let monNombreLocal = 2;
//   // monNombreLocal est une variable locale, car déclarée uniquement au sein d’une fonction
//   console.log("Intérieur de la fonction : ");
//   console.log(monNombre); // monNombre est accessible
//   console.log(monNombreLocal); // monNombreLocal est accessible
// }

// afficheUnNombre();
// console.log("Extérieur de la fonction : ");
// console.log(monNombre); // monNombre est accessible
// console.log(monNombreLocal); // monNombreLocal n’est pas accesssible

// À vous de jouer !
// Étape 1 : découpez votre code en fonctions :
// Création de fonctions :

function afficheResultat(score, nbTotalDeMotsProposes) {
  console.log("Votre score est de " + score + " / " + nbTotalDeMotsProposes);
}

function choisirPhrasesOuMots() {
  let choix = prompt('Choisissez entre : "mots" ou "phrases"');
  while (choix !== "mots" && choix !== "phrases") {
    choix = prompt(
      "wesh, choisis te dis-je insolent(e) : 'mots' ou  'phrases' ?"
    );
  }
  return choix;
}

function lancerBoucleDeJeu(listePropositions) {
  let score = 0;
  for (let i = 0; i < listePropositions.length; i++) {
    motUtilisateur = prompt("Entrez le mot : " + listePropositions[i]);
    if (motUtilisateur === listePropositions[i]) {
      score++;
    }
  }
  return score;
}

// Étape 2 : séparez votre code en plusieurs fichiers :
