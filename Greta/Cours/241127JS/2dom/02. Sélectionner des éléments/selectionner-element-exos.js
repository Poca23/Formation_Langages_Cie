/**
 * -------------------------------------------------------
 * 1 - Récupérer (par les 2 méthodes différentes) la section "nos services" :
 * → par son id
 * → par son nom de balise
 * -------------------------------------------------------
 */

// let sectionServices = document.getElementById('our-services');
// console.log(sectionServices);
// let baliseSection = document.getElementsByTagName('section');
// console.log(baliseSection[1]);

/**
 * -------------------------------------------------------
 * 2 - Récupérer les 2 inputs par leur id
 * → Afficher leur valeur (value) dans la console
 * -------------------------------------------------------
 */

// let inputId1 = document.getElementById('great');
// let inputId2 = document.getElementById('not-great');

// console.log(inputId1, inputId2);

/**
 * -------------------------------------------------------
 * 3 - Récupérer le titre de niveau 3 de la seconde division de la seconde section
 * → afficher la valeur de son texte dans la console
 * -------------------------------------------------------
 */

// let titreH3 = document.querySelector('section h3');
// console.log(titreH3);

// let texte = titreH3.textContent;
// console.log(texte).value;

/**
 * -------------------------------------------------------
 * 4 - Il est possible de récupérer un élément qui possède plusieurs classes. Récupérer tous les éléments :
 * → qui partagent la classe :   "btn"
 * → qui partagent la classe :   "cta-btn"
 * → qui partagent la classe :   "cta-primary"
 * → qui partagent la classe :   "cta-secondary"
 * → qui partagent les classes : "cta-btn cta-primary"
 * → qui partagent les classes : "btn cta-btn cta-secondary"
 *
 * → Les afficher dans la console
 * → Via JS, compter le nombre de fois où la classe "btn" est présente
 * -------------------------------------------------------
 */

// let elementClasses = document.querySelectorAll('.btn', '.cta-btn','.cta-primary', '.cta-secondary', '.cta-btn cta-primary', '.btn cta-btn cta-secondary' )
// console.log(elementClasses);

// let arrayClasses = Array.from(elementClasses);

// let filterBtn = arrayClasses
// .filter(element => element.classList.contains('btn'));
// console.log(filterBtn);

/**
 * -------------------------------------------------------
 * 5 - Récupérer tous les paragraphes. Via une boucle, les afficher dans la console
 * -------------------------------------------------------
 */

// let allParagraphs = document.querySelectorAll('p');
// console.log(allParagraphs);

// allParagraphs.forEach((paragraphe) => {
//    console.log(paragraphe.innerText);
// });

/**
 * -------------------------------------------------------
 * 6 - Récupérer et afficher les éléments suivants dans la console :
 * → le parent direct de la première section
 * → le premier enfant de la première section
 * → le dernier enfant de la première section
 * → le frère précédent de la section "nos services"
 * → le frère suivant de la section "nos services"
 *
 * -------------------------------------------------------
 */

let sectionParent = document.getElementsByTagName("section");
console.log(sectionParent[0].parentElement);

let sectionFirstEnfant = document.getElementsByTagName("section");
console.log(sectionFirstEnfant[0].firstElementChild);

let sectionLastEnfant = document.getElementsByTagName("section");
console.log(sectionLastEnfant[0].lastElementChild);

let sectionServices = document.getElementById("our-services");
console.log(sectionServices);

let sectionServicesPreviousBrother = sectionServices.previousElementSibling;
console.log(sectionServicesPreviousBrother);

let sectionServicesNextBrother = sectionServices.nextElementSibling;
console.log(sectionServicesNextBrother);

/**
 * -------------------------------------------------------
 * 7 - Créer une fonction qui permette de compter le nombre de fois "où la balise X apparaît".
 * Compter ensuite le nombre de fois où :
 * la balise HTML h1 apparaît
 * la balise HTML h2 apparaît
 * la balise HTML h3 apparaît
 * la balise HTML p apparaît
 * la balise HTML section apparaît
 * la balise HTML div apparaît
 * → Calculer la somme totale de ces occurences et afficher le résultat dans la console
 * -------------------------------------------------------
 */

// créer une fonction countNbTag
// la fonction permet de compter le nombre de balise qui apparaît
// On utilisera la méthode document.getElementsByTagName(paramètre)
// On crée la fonction avec comme argument une balise qui va compter le nombre de balise totale



function countNbTag (tag){
   let nbTag = document.getElementsByTagName(tag);
 // Vérification si la collection n'est pas vide
   if (nbTag.length > 0){
    return nbTag.length;
   }
   // Si la balise n'existe pas dans le DOM, retourner 0
   return 0;
}
console.log(countNbTag("p"));



let counter = 0;

const arrayTag = ["h1", "h2", "h3", "p", "section", "div"];
arrayTag.forEach ((element) =>
   counter = counter + countNbTag(element)); // Ajout du nombre de balises)
console.log(counter);
