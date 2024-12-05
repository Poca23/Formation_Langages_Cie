/**
 * --------------------------------------------
 * 1 - Au click sur le bouton "Cacher" :
 *
 * → Cacher le paragraphe
 * → Changer le texte du bouton "Cacher" en "Afficher"
 *
 * Si le bouton est cliqué de nouveau :
 *
 * → Le paragraphe s'affiche de nouveau
 * → Changer le texte du bouton "Afficher" en "Cacher"
 * --------------------------------------------
 */

let arrayBtn = document.querySelectorAll("button");
console.log(arrayBtn);

arrayBtn[0].id = "btn1";

let btn1 = document.querySelector("#btn1");
let p = document.querySelector("p");
console.log(p);

p.style.visibility = "visible";

function display() {
  if (p.style.visibility === "visible") {
    p.style.visibility = "hidden";
    btn1.innerHTML = "Afficher";
  } else {
    p.style.visibility = "visible";
    btn1.innerHTML = "Cacher";
  }
}
btn1.addEventListener("click", display);

/**
 * --------------------------------------------
 * 2 - Création d'une calculatrice simple :
 *
 * → Créer 3 champs inputs :
 *   - Le premier et le troisième sont de type number et permettent de saisir un nombre (1 et 2 par exemple)
 *   - Le second est de type texte et permet de saisir un opérateur (+, -, *, /)
 *
 * → Créer un bouton qui déclenche le calcul des 2 inputs par l'opérateur
 *
 * →  Afficher le résultat dans le HTML. Tant qu'il n'y a pas de résultat, afficher un petit texte en attente.
 * --------------------------------------------
 */

for (i = 0; i < 3; i++) {
  // on boucle 3 fois pour créer 3 élément input
  let input = document.createElement("input"); // créer un élément input
  document.body.appendChild(input); // on injecte les trois éléments dans l'élément body
  console.log(input); // on vérifie sur la console
}

let arrayInputs = document.querySelectorAll("input"); // on sélectionne les inputs, ce qui crée un tableau d'input
console.log(arrayInputs); // on vérifie

//on définit le type de l'input 1
arrayInputs[0].setAttribute("type", "number"); // ajout d'attribut sur l'input 1
///
//on définit le type de l'input 2
arrayInputs[1].setAttribute("type", "text"); // ajout d'attribut sur l'input 2
arrayInputs[1].setAttribute("placeholder", "Entre un opérateur wesh"); // ajout d'un placeholder sur l'input 2
///
//on définit le type de l'input 3
arrayInputs[2].setAttribute("type", "number"); //ajout d'attribut sur l'input 2
///

let button = document.createElement("button"); // créer un élément button
button.innerText = "Clique pour calculer si tu l'oses fanfrolet"; // on ajoute du texte au bouton
document.body.appendChild(button); // on injecte le bouton dans le body

button.addEventListener("click", compute);

function compute() {
  const value1 = parseFloat(arrayInputs[0].value);
  const operator = arrayInputs[1].value;
  const value2 = parseFloat(arrayInputs[2].value);

  let result = "";
  switch (operator) {
    case "+":
      result = value1 + value2;
      break;

    case "-":
      result = value1 - value2;
      break;

    case "*":
      result = value1 * value2;
      break;

    case "/":
      result = value1 / value2;
      break;
  }
  let p = document.createElement("p");
  p.innerHTML = result;
  document.body.appendChild(p);
}

//
/**
 * --------------------------------------------
 * 3 - Créer un container avec 3 div (sans passer par JS, en HTML/CSS classique). Chaque div propose un produit à acheter avec une image, un titre, un petit paragraphe et un bouton "Acheter 🤓"
 *
 * → Attacher un écouteur d'événément de type "click" sur chaque bouton "Acheter 🤓".
 * → Si une div est cliquée, le produit est poussé dans un tableau "selectedProducts".
 * → Cette propriété est affichée dans le DOM, et pour chaque nouveau produit sélectionné, le DOM est mis à jour.
 *
 * Le pôle Marketing vous demande d'ajouter un bout de code afin de relever l'intérêt des utilisateurs vis-à-vis des produits proposés sur la e-boutique
 * De votre côté, vous imaginez le procédé suivant : "j'écoute le nombre de fois où l'utilisateur passe sa souris sur la div de l'un des produits"
 *
 * → Attacher un écouteur d'événément de type "mouseover" sur chaque div.
 * → Compter le nombre de fois où la souris de l'utilisateur passe sur chaque div. Dès lors que la souris survole une div, mettre à jour le "nombre de fois où la div X a été survolée" dans l'objet utilisateur
 * --------------------------------------------
 */

let arrayBtnBuy = document.querySelectorAll(".btn-buy");

// arrayBtnBuy.forEach((button) => {
//   button.addEventListener("click", "");
// });
const selectedProducts = [];
const arrayDiv = document.querySelectorAll("#product");

function pushProduct() {
  for (i = 0; i < arrayDiv.length; i++) {}
}
/**
 * --------------------------------
 * 3.bis - Compter le nombre de fois où chaque "card" est survolée par la souris de l'utilisateur
 * → Créer 5 compteurs HTML : un pour chaque card + un compteur global.
 * → Dès qu'une "card" est survolée, l'utilisateur doit voir le compteur lié à l'élément, ainsi que le compteur global, être incrémentés.
 *
 *
 * Exemple :
 *
 * Au début, tous les compteurs sont à 0.
 *
 * Si mon utilisateur survole une première fois la "card" n°1, il doit voir écrit :
 * → card n°1 : 1 fois survolée
 * → card n°2 : 0 fois survolée
 * → card n°3 : 0 fois survolée
 * → card n°4 : 0 fois survolée
 * → Total : 1 survol
 *
 *  * Si mon utilisateur survole ensuite une première fois la "card" n°2, il doit voir écrit :
 * → card n°1 : 1 fois survolée
 * → card n°2 : 1 fois survolée
 * → card n°3 : 0 fois survolée
 * → card n°4 : 0 fois survolée
 * → Total : 2 survols
 *
 * Etc...
 *
 *
 * → Si toutes les "card" ont été survolées, un texte doit apparaître "Bien joué cher utilisateur"
 * → Si les "card" ont été survolées plus de 100 fois, il doit voir apparaître l'image d'un charmant phacochère.
 *
 *
 * Lors d'un survol de souris, ajouter à la "card" survolée une classe. Lorsque la "card" n'est plsu survolée, retirer cette classe.
 * Renseigner le CSS de cette classe directement depuis le fichier CSS.
 * --------------------------------
 */
