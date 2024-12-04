/**
 * --------------------------------
 * 1 - Via JS, renseigner la valeur des attributs src et alt des balises <img>
 * Toujours via JS, leur fixer une longueur de 100%.
 * --------------------------------
 */
let arrayImg = document.querySelectorAll("img"); // sélection des éléments img
console.log(arrayImg);

arrayImg.forEach((element) =>
  element.setAttribute("src", "assets/sand-305497_1920.png")
);

arrayImg.forEach((element) =>
  element.setAttribute("alt", "image-plage-vacances")
);

arrayImg.forEach((element) => (element.style.width = "100%"));

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

let arrayTitle = document.querySelectorAll("h1, h2, h3, h4, h5, h6"); // sélection des balises titres
console.log(arrayTitle);

arrayTitle.forEach((title) => {
  // parcourir le tableau pour ajouter l'attribut "title" à chaque balise h
  title.classList.add("title"); // ajout de la class "title"

  if (title.tagName === "H1") {
    title.classList.add("title1");
  }
  if (title.tagName === "H2") {
    title.classList.add("title2");
  }
  if (title.tagName === "H3") {
    title.classList.add("title3");
  }
});

/**
 * --------------------------------
 * 3 - Ajouter les classes suivantes à certains éléments HTML (à vous d'analyser lesquels) :
 * → "section2"
 * → "card-container"
 * → "card"
 * --------------------------------
 */

let arraySection = document.querySelectorAll("section");
arraySection[arraySection.length - 1].classList.add("section2");

let cardContainer = document.querySelector("section.section2 > div");
cardContainer.classList.add("card-container");
console.log(cardContainer);

let arrayCard = cardContainer.querySelectorAll("div");
console.log(arrayCard);

arrayCard.forEach((card) => card.classList.add("card"));

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

// changer la couleur de la balise main :
let main = document.querySelector("main");
main.style.backgroundColor = "rgb(157, 157, 157)";

// modifier la section 2 :
let section2 = document.querySelector("section.section2");
section2.setAttribute(
  "style",
  "background-color: #f1f1f1; padding: 1rem; margin:1rem; display:flex; justify-content: center;align-items: center; flex-direction: row;"
);

// modifier "card-container" :
cardContainer.setAttribute(
  "style",
  "border: 1px solid; padding: 1rem; margin:1rem;display:flex; justify-content:space-evenly;align-items: center; flex-direction: column;"
);

// modifier "card" :
arrayCard.forEach((card) =>
  card.setAttribute(
    "style",
    "border: 1px solid; padding: 1rem; margin:1rem;display:flex; justify-content: center;align-items: center; flex-direction: column"
  )
);

/**
 * --------------------------------
 * 5 - Retirer la classe "card" du second et du troisième élément possédant cette classe.
 * Ça casse tout n'est-ce pas ? 🤓 En vrai ça passe mais j'aime pas trop.
 * → Remettre la classe "card" sur ces deux éléments
 * --------------------------------
 */

arrayCard.forEach((card) => card.classList.add("card"));

/**
 * --------------------------------
 * 6 - Via JS, créer une <div> comme celles déjà présentes dans le HTML : avec sa classe, son style et ses éléments enfants.
 * → Injecter cette <div> en tant que 4ème enfant de "card-container"
 * Cool n'est-ce pas ? 🤓
 * --------------------------------
 */


let divCard = document.querySelector('.card'); // on sélectionne l'élément à cloner

let cloneDivCard = divCard.cloneNode(true); // copy de l'élément entier div

cloneDivCard.id = 'divClone'; // on attribut un id au clone de la div

document.body.app(cloneDivCard); // On ajoute la div clonée à l'intérieur de la div "cardContainer"


