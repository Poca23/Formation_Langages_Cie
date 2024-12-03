/**
 * --------------------------------
 * 1 - Via JS, renseigner la valeur des attributs src et alt des balises <img>
 * Toujours via JS, leur fixer une longueur de 100%.
 * --------------------------------
 */
let arrayImg = document.querySelectorAll("img")[0]; // sélection des éléments img
console.log(arrayImg);

let src0 = arrayImg.setAttribute("src", "assets/cloud-296722_1920.png");
console.log(src0);

arrayImg = document.querySelectorAll("img")[1]; // sélection des éléments img
console.log(arrayImg);

let src1 = arrayImg.setAttribute("src", "assets/sand-305497_1920.png");
console.log(src1);

arrayImg = document.querySelectorAll("img")[2]; // sélection des éléments img
console.log(arrayImg);

let src2 = arrayImg.setAttribute("src", "assets/unicorn-3637428_1920.png");
console.log(src2);

arrayImg.forEach((element) => element.setAttribute("style", "width: 100%"));

// for (let i = 0; i < arrayImg.length; i++) {
// let src = arrayImg[i].set

// }

// Voici un bout de code : ne pas y toucher (vraiment) 🤓
const titleList = ["h1", "h2", "h3", "h4", "h5", "h6"];
/**
 * --------------------------------
 * 2 - Via une boucle (sur le tableau ci-dessus), récupérer toutes les balises titres de la page.
 * → Leur ajouter (à toutes) la classe "title"
 * → Si c'est une balise h1, ajouter en plus la classe "title1"
 * → Si c'est une balise h2, ajouter en plus la classe "title2"
 * → Si c'est une balise h3, ajouter en plus la classe "title3"
 * --------------------------------
 */

/**
 * --------------------------------
 * 3 - Ajouter les classes suivantes à certains éléments HTML (à vous d'analyser lesquels) :
 * → "section2"
 * → "card-container"
 * → "card"
 * --------------------------------
 */

/**
 * --------------------------------
 * 4 - Via JS :
 * → Changer la couleur de fond de la balise <main></main>
 *
 * Classe "section2" :
 * → Lui ajouter une couleur de fond, un padding et un margin
 * → La passer en flex et en column
 *
 * * Classe "card-container" :
 * → Lui ajouter une bordure, un padding et un margin
 * → La passer en flex et aligner ses éléments enfants selon l'axe horizontal. Il doit y avoir "un peu d'espace entre chaque enfant"
 *
 * Classe "card"
 * → Lui ajouter une bordure, un padding et un margin
 * → La passer en flex et en column
 * → Centrer ses éléments enfants par rapport à l'axe vertical
 *
 * Bien. Vous vous êtes entraînés à manipuler le CSS depuis Javascript.
 * Maintenant que vous êtes bons, sentez-vous libres d'ajouter un peu de CSS directement depuis la feuille CSS de l'exercice.
 * --------------------------------
 */

/**
 * --------------------------------
 * 5 - Retirer la classe "card" du second et du troisième élément possédant cette classe.
 * Ça casse tout n'est-ce pas ? 🤓 En vrai ça passe mais j'aime pas trop.
 * → Remettre la classe "card" sur ces deux éléments
 * --------------------------------
 */

/**
 * --------------------------------
 * 6 - Via JS, créer une <div> comme celles déjà présentes dans le HTML : avec sa classe, son style et ses éléments enfants.
 * → Injecter cette <div> en tant que 4ème enfant de "card-container"
 * Cool n'est-ce pas ? 🤓
 * --------------------------------
 */
