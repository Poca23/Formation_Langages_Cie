// Voici un jeu de données : interdiction d'y toucher :)
const characterNames = [
  "63AIS",
  "A'misandra",
  "Amimari",
  "Alika",
  "54B2",
  "A'merpact",
  "Amazora",
];
/**
 * -------------------------------------------------------
 * 1 - Afficher le nombre de personnages dans le tableau
 * -------------------------------------------------------
 */

console.log(characterNames.length);

/**
 * -------------------------------------------------------
 * 2 - Afficher le nom du premier personnage du tableau
 * -------------------------------------------------------
 */

console.log(characterNames[0]);

/**
 * -------------------------------------------------------
 * 3 - Afficher le nom du dernier personnage (le 7eme)
 * -------------------------------------------------------
 */

console.log(characterNames[6]);

/**
 * -------------------------------------------------------
 * 4 - Afficher le nom du dernier personnage **SANS**
 * savoir qu'il est le 7eme
 * -------------------------------------------------------
 */

let lastElement = characterNames.length - 1;

console.log(characterNames[lastElement]);

/**
 * -------------------------------------------------------
 * 5 - Afficher les noms de tous les personnages
 * -------------------------------------------------------
 */

console.log(characterNames);

/**
 * -------------------------------------------------------
 * 6 - Afficher le nom de chaque personnage accompagné du
 * nombre de caractères qu'il contient. Ex: Alika (5)
 * -------------------------------------------------------
 */

characterNames.forEach((item) =>
  console.log(item + " " + "(" + item.length + ")")
);

/**
 * -------------------------------------------------------
 * 7 - Afficher le nom de chaque personnage en minuscules
 * -------------------------------------------------------
 */
// characterNames.forEach((item) => console.log(item.toLowerCase()));

/**
 * -------------------------------------------------------
 * 8 - Afficher le nombre de personnages dont le nom
 * contient la lettre 'a' (minuscule ou majuscule)
 * -------------------------------------------------------
 */

let nbLetterAInWord = 0;
characterNames.forEach((item) => {
  let condition = item.includes("a") + item.includes("A");
  if (condition) {
    nbLetterAInWord++;
  }
});
console.log(nbLetterAInWord);
/**
 * -------------------------------------------------------
 * 9 - Créer une fonction `search(needle)` qui renvoie
 * les personnages dont le nom contient les lettres
 * passées en paramètre.
 *
 * Ex : search('Amim') doit renvoyer 'Amimari'
 * -------------------------------------------------------
 */

// Déclaration de la fonction
function search(needle) {
  // crée une variable non-réassignable pour stocker les réponses valides
  const matchAnswers = [];
  // boucle pour le tableau
  characterNames.forEach((name) => {
    // Pour chaque élément
    const condition = name.includes(needle);

    // donner la condition pour stocker dans le nouveau tableau
    if (condition) {
      matchAnswers.push(name);
    }
  });
  return matchAnswers;
}
// Appeler la fonction
console.log(search("Amim"));
