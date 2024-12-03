/**
 * -------------------------------------------------------
 * 1 - Créer une div :
 * → qui possède un titre de niveau 3 avec un id et du texte
 * → qui possède un paragraphe avec du texte
 * → qui possède un bouton avec une classe et un texte
 *
 * Ajouter cette div à la section "hero-section"
 * -------------------------------------------------------
 */

let div = document.createElement("div"); //on crée une div

let h3 = document.createElement("h3"); // on crée un titre h3
h3.id = "monIdh3"; // on crée un id au titre h3 précédent
h3.innerText = "Je suis un titre h3"; // on ajoute du texte dans le titre h3 précédent
div.appendChild(h3); // on ajoute le titre h3 à la div

//Idem avec le paragraphe
let p = document.createElement("p");
p.innerText = "Je suis un paragraphe";
div.appendChild(p);

//Idem avec le paragraphe
let button = document.createElement("button");
button.classList = "btn";
button.innerText = "Clique moi wesh :) ";
div.appendChild(button);

document.body.appendChild(div); // on ajoute la div au body du document html

let sectionHero = document.querySelector("#hero-section");
sectionHero.appendChild(div);

/**
 * -------------------------------------------------------
 * 2 - Écrire une fonction qui créer et retourne un élément HTML "li" avec du texte.
 * Exemple : l'execution de la fonction  createMenuItem("Item 1")       retourne :       <li>Item 1</li>
 * → Créer ainsi 5 puces et les insérer dans la liste à puces "menu"
 * -------------------------------------------------------
 */

function createMenuItem() {
  let menu = document.querySelector("#menu");
  for (let i = 0; i < 5; i++) {
    let item = document.createElement("li");
    item.innerText = "Je suis un item du menu";

    menu.appendChild(item);
  }
}
createMenuItem();

/**
 * -------------------------------------------------------
 * 3 - Créer un second menu (via JS uniquement):
 * → La liste à puces aura pour id "menu2" et comportera 3 éléments
 * -------------------------------------------------------
 */

let menu2 = document.createElement("menu");
menu2.id = "menu2";
document.body.appendChild(menu2);

function createMenu2Item() {
  let menu = document.querySelector("#menu2");
  for (let i = 0; i < 3; i++) {
    let item = document.createElement("li");
    item.innerText = "Je suis un item du menu2";

    menu.appendChild(item);
  }
}
createMenu2Item();

/**
 * -------------------------------------------------------
 * 4 - Déplacer le premier et le dernier élément de la première liste (menu) dans la seconde liste (menu2)
 * -------------------------------------------------------
 */
let menu = document.querySelector("#menu");

menu2.appendChild(menu.firstElementChild);
menu2.appendChild(menu.lastElementChild);

/**
 * -------------------------------------------------------
 * 5 - Changer le texte des puces qui viennent d'être déplacées
 * -------------------------------------------------------
 */

let items = menu2.querySelectorAll("li");

if (items.length > 1) {
  // tableau d'items doit être de minmum un élément
  items[items.length - 1].innerText =
    "Je suis le dernier item renommé du menu2";
  items[items.length - 2].innerText =
    "Je suis l'avant-dernier item renommé du menu2";
}

/**
 * -------------------------------------------------------
 * 6 - Supprimer le titre de niveau 1 qui n'a rien à faire dans le <head></head> et dont l'id est scandaleux 🤓
 * -------------------------------------------------------
 */

let h1Frauduleux = document.querySelector("#test-loooool");

h1Frauduleux.remove();

// Voici un bout de code : ne pas toucher !
const elementListToCreate = [
  {
    name: "section",
    times: 3,
  },
  {
    name: "div",
    times: 3,
  },
  {
    name: "p",
    times: 1,
  },
  {
    name: "span",
    times: 3,
  },
];
/**
 * -------------------------------------------------------
 * 7 - Créer une boucle qui permet de créer et d'injecter dans le body les éléments du tableau un nombre X de fois.
 * Chaque élément est l'enfant du précédent.
 * Exemple (basé sur le tableau ci-dessus) : il faut créer 3 sections. Chaque section possède 3 div. Chaque div possède 3 paragraphes (avec du texte). Chaque paragraphe possède 3 spans (avec du texte et une classe, la même pour chaque span)
 * -------------------------------------------------------
 */

for (let i = 0; i < 3; i++) {
  //boucle 3 fois pour créer trois sections //

  let section = document.createElement("section"); //création d'une section
  document.body.appendChild(section); // ajouter la section au body

  for (let j = 0; j < 3; j++) {
    //boucle 3 fois pour créer trois divs //

    let div = document.createElement("div"); //création de la div
    section.appendChild(div); // ajouter la div à la section

    let p = document.createElement("p"); // création du paragraphe
    div.appendChild(p); // ajouter le paragraphe à la div

    let span = document.createElement("span"); // création du span
    span.id = "je suis un span";
    p.appendChild(span); // ajouter le span au paragraphe
  }
}

/**
 * -------------------------------------------------------
 * 8 - Sélectionner tous les spans nouvellement créés. Modifier leur texte via une boucle. Chaque span doit afficher "je suis le span n°X"
 * Exemple :
 * → Le premier span doit afficher "je suis le span n°1"
 * → Le second span doit afficher "je suis le span n°2"
 * → etc... jusqu'au span n°27 🤯
 * -------------------------------------------------------
 */

let arraySpans = document.querySelectorAll("span"); // sélection de tous les spans qui devient une NodeList de neuf éléments



console.log(arraySpans); // vérification

for (let i = 0; i < arraySpans.length; i++) {
  arraySpans[i].innerText = `je suis le span n°${i + 1}`;
}
console.log(arraySpans);
