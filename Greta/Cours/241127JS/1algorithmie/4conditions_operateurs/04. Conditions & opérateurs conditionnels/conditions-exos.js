// Voici une variable : ne pas toucher :)
const guessName = "Sphinx";
/**
 * -------------------------------------------------------
 * 1 - Si la variable guessName est égale à "Sphinx", afficher "Vive l'Égypte".
 *  Sinon, afficher "De toute façon je ne comprends rien aux cartes"
 * -------------------------------------------------------
 */

if (guessName === "Sphinx") {
  console.log("Vive l'Egypte");
} else {
  console.log("De toute façon je ne comprends rien aux cartes");
}

// Voici une variable : ne pas toucher :)
const comparedString = "secret";
/**
   * -------------------------------------------------------
   * 2 - Demander à l'utilisateur de saisir un mot de passe (voir la fonction Javascript “prompt”)
   *  Si ce mot de passe correspond à la variable comparedString, afficher "Bienvenue BG ! 🙌" dans la console
    Sinon: afficher "C'est NON 🦄".
   * -------------------------------------------------------
*/

// let answer = prompt("Saisir un mot de passe ");

// if (answer === comparedString) {
//   console.log("Bienvenue BG");
// } else {
//   console.log("C'est NON 🦄");
// }

/**
   * -------------------------------------------------------
   * 3 - Écrire un programme qui demande à l'utilisateur d'entrer son âge (en utilisant “prompt”) et qui affiche ensuite un message en fonction de sa tranche d'âge :
    Si l'âge est inférieur à 3 : "Hello, Baby 🍼!"
    Si l'âge est inférieur à 18: "Hi! 👋"
    Si l'âge est supérieur à 100: "Greetings 🖖"
    Dans les autres cas: "Wow... 😲"
   * -------------------------------------------------------
*/
// let age = prompt("Rentre ton âge wesh :");
// if (age < 3) {
//   console.log("Hello, Baby 🍼");
// }
// else if (age < 18) {
//   console.log("Hi! 👋");
// }
// else if (age > 100) {
//   console.log("Greetings 🖖");
// } else {
//   console.log("Wow... 😲");
// }

/**
 * -------------------------------------------------------
 * 4. Écrire un programme qui demande à l'utilisateur son nom et son âge et qui vérifie si le nom est égal à "Bob" et si l'âge est égal à 30.
 *  Si les deux conditions sont vérifiées, afficher "Welcome", sinon "Go away".
 * -------------------------------------------------------
 */
// let nom = prompt("ton nom wesh");
// let age = prompt("ton âge wesh");

// if (nom === "Bob" && age === "30") {
//   console.log("Ami !");
// } else {
//   console.log("Impudent");
// }

/**
   * -------------------------------------------------------
   * 5. En Javascript, on peut récupérer la jour de la semaine en cours en utilisant new Date().getDay().
   *  Cette expression nous retourne un nombre entre 0 (dimanche) et 6 (samedi).
    → Utiliser une structure switch...case pour afficher dans la console le nom du jour de la semaine en fonction du nombre retourné. 
   * -------------------------------------------------------
*/

// Voici un bout de code. Ne pas toucher !
// const animal = {
//   name: "Lucky",
//   specie: "Cat",
//   color: "Black",
// };
// if (animal.name === "Lucky") {
//   console.log("Voici un Pôtichat mignon");
// } else {
//   console.log("Argh ! Ce n'est pas mon chat...");
// }

// let actualDate = new Date();
// // console.log(actualDate);
// let actualDay = actualDate.getDay();
// // console.log(actualDay);

// switch (actualDay) {
//   case 0:
//     console.log("Sunday");
//     break;
//   case 1:
//     console.log("Monday");
//     break;
//   case 2:
//     console.log("Tuesday");
//     break;
//   case 3:
//     console.log("Wednesday");
//     break;
//   case 4:
//     console.log("Thursday");
//     break;
//   case 5:
//     console.log("Friday");
//     break;
//   case 6:
//     console.log("Saturday");
//     break;
// }

/**
 * -------------------------------------------------------
 * 6. Réécrire la condition en utilisant l'opérateur ternaire
 * -------------------------------------------------------
 */

const animal = {
  name: "Lucky",
  specie: "Cat",
  color: "Black",
};

animal.name === "Lucky"
  ? console.log("Voici un Pôtichat mignon")
  : console.log("Argh ! Ce n'est pas mon chat...");

let actualDate = new Date();
console.log(actualDate);
let actualDay = actualDate.getDay();
console.log(actualDay);

actualDay === 3 ? console.log("Wednesday") : console.log("Other day");

// Voici un jeu de données : ne pas toucher :)
const n1 = 1;
const n2 = 13;
const n3 = 20;
const n4 = 41;
const n5 = 70;
const n6 = 100;

/**
 * -------------------------------------------------------
 * 7 - Pour chaque donnée, vérifier si elle est paire. Si oui, afficher sa valeur suivie de "est paire ✅". Sinon, afficher sa valeur suivie de "Impaire ❌"
 * -------------------------------------------------------
 */

if (n1 % 2 == 0) {
  console.log(n1 + " est paire ✅");
} else {
  console.log(n1 + " est impaire ❌");
}
if (n2 % 2 == 0) {
  console.log(n2 + " est paire ✅");
} else {
  console.log(n2 + " est impaire ❌");
}
if (n3 % 2 == 0) {
  console.log(n3 + " est paire ✅");
} else {
  console.log(n3 + " est impaire ❌");
}
if (n4 % 2 == 0) {
  console.log(n4 + " est paire ✅");
} else {
  console.log(n4 + " est impaire ❌");
}
if (n5 % 2 == 0) {
  console.log(n5 + " est paire ✅");
} else {
  console.log(n5 + " est impaire ❌");
}
if (n6 % 2 == 0) {
  console.log(n6 + " est paire ✅");
} else {
  console.log(n6 + " est impaire ❌");
}
