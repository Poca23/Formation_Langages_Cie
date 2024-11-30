// Voici un objet qui représente un Chat : interdit d'y toucher :)

const billyTheCat = {
  name: "billy",
  color: "black",
  favouriteFoods: ["fish", "chicken"],
  isHungry: true,
  meow: function () {
    return "Meeeeeeeow";
  },
};

/**
 * -------------------------------------------------------
 * 1 - Afficher les valeurs de chacunes des clés
 * -------------------------------------------------------
 */

console.log(billyTheCat);

/**
 * -------------------------------------------------------
 * 2 - Grâce à prompt(), afficher la valeur de la clé "color"
 * -------------------------------------------------------
 */
// const answer = prompt("color");
console.log(billyTheCat[answer]);

// Voici un tableau d'objets : interdit d'y toucher  :)
const animals = [
  { name: "kitty", species: "cat", noise: "meow" },
  { name: "skaly", species: "squale", noise: "frrrrrr" },
  { name: "wormy", species: "worm", noise: "????" },
  { name: "Pikatchue", species: "electrick mouse", noise: "pikaaaaa" },
];

/**
 * -------------------------------------------------------
 * 3 - Afficher le dernier élément
 * -------------------------------------------------------
 */

console.log(animals[animals.length - 1]);

/**
 * -------------------------------------------------------
 * 3 - Afficher le dernier élément sans savoir que c'est le 4ème
 * -------------------------------------------------------
 */

console.log(animals[animals.length - 1]);

/**
 * -------------------------------------------------------
 * 4 - Supprimer le nom du 2ème animal et l'espèce du 3ème
 * -------------------------------------------------------
 */

delete animals[1].name;
delete animals[2].species;
console.log(animals);

/**
 * -------------------------------------------------------
 * 5 - Remplacer le nom du premier animal par celui du 4ème (2 façons de faire)
 * -------------------------------------------------------
 */
// Méthode 1:
animals[0].name = animals[3].name;

// Méthode 2:
let name1 = animals[0].name;
let name4 = animals[3].name;
console.log(name1, name4);

name1 = name4;
name4 = name1;
console.log(animals);

// Voici un objet qui contient (entre autres) une fonction : interdit d'y toucher :)
const apple = {
  isEaten: false, //boleen
  eat: function () {
    this.isEaten ? "le fruit a déjà été mangé" : (this.isEaten = true); 
  },
};

/**
 * -------------------------------------------------------
 * 6 - En manipulant l'objet, afficher "le fruit a été mangé"
 * -------------------------------------------------------
 */

apple.eat();
const result = apple.eat();
console.log(result);
