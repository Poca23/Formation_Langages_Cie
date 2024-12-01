// revisions Algorithmie :

// Exercice 1 :

/**----------------------------------------------------------------------------- */
/* 
1. Pair ou impair
Écris une fonction qui prend un nombre en entrée et retourne une chaîne indiquant si le nombre est pair ou impair.

Exemple :

javascript
Copier le code
pairOuImpair(5); // Retourne : "Impair"
pairOuImpair(8); // Retourne : "Pair"
 */
// ÉCRIRE ICI :

// function pairOuImpair(number){
//       if (number % 2 === 0){
//             return 'Ce nombre est pair';  // retourne le message 'Ce nombre est pair'
//       } else {
//             return 'Ce nombre est impair'; // retourne le message 'Ce nombre est impair'
//       }
// };
// console.log(pairOuImpair(8));

/**----------------------------------------------------------------------------- */
/* 2. Somme des nombres
Écris une fonction qui calcule la somme de tous les nombres d’un tableau donné.

Exemple :

javascript
Copier le code
somme([1, 2, 3, 4]); // Retourne : 10
somme([10, -2, 3]);  // Retourne : 11 
*/
// ÉCRIRE ICI :

// function calculeSumNbArray() {
//   const array1 = [1, 2, 3, 4];
//   let sum = 0;

//   for (let i = 0; i < array1.length; i++) {
//     sum += array1[i];
//   }
//   return sum;
// }
// console.log(calculeSumNbArray());

// Utilisation avec la boucle forEach :

// const array1 = [1, 2, 3, 4];
// function calculeSumNbArray(array1) {
//   let somme = 0;

//   array1.forEach((element) => {
//     somme += element;
//   });
//   return somme;
// }
// console.log(calculeSumNbArray(array1));

// const array2 = [10, -2, 3, 4];

/**----------------------------------------------------------------------------- */
/*
3. Trouver le maximum
Écris une fonction qui retourne le plus grand nombre dans un tableau.

Exemple :

javascript
Copier le code
maximum([1, 5, 3, 9, 2]); // Retourne : 9
maximum([-10, -5, -3]);   // Retourne : -3
*/
// ÉCRIRE ICI :

// const array2 = [-10, -5, -3];

// première méthode, FOR :

// function calculHighNumber(array1) {
//   let maxNumber = array1[0];

//   for (let i = 0; i < array1.length; i++) {
//     if (maxNumber < array1[i]) {
//       maxNumber = array1[i];
//     }
//   }
//   return maxNumber;
// }
// console.log(calculHighNumber(array1));

// deuxième méthode, FOR :

// const array1 = [1, 5, 3, 9, 2];

// function calculSumNumberMax(array1) {
//   let maxNumber = array1[0];

//   array1.forEach((element) => {
//     if (maxNumber < element) {
//       maxNumber = element;
//     }
//   });

//   return maxNumber;
// }
// console.log(calculSumNumberMax(array1));

// troisième méthode, for Each ET Math.max :

// const array1 = [1, 5, 3, 9, 2];

// function calculMaxNumber(array1){
//       let maxNumber = array1[0];

//       array1.forEach((element) => {
//             maxNumber = Math.max(maxNumber,element);
//       })
//       return maxNumber;
// }
// console.log(calculMaxNumber(array1));

// quatrième méthode, Math.max :

// const array1 = [1, 5, 3, 9, 2];

// function calculMaxNumber (array1){
//       return Math.max(...array1);
// }
// console.log(calculMaxNumber(array1));

/**----------------------------------------------------------------------------- */
/* 
4. FizzBuzz
Écris une fonction qui affiche les nombres de 1 à 20, mais :

Remplace les multiples de 3 par "Fizz".
Remplace les multiples de 5 par "Buzz".
Remplace les multiples de 3 et 5 par "FizzBuzz".
Exemple :

Copier le code
1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, ... 
*/
// ÉCRIRE ICI :


// for (let i = 1; i < 21; i++){

//       if (i % 3 === 0 && i % 5 === 0){
//             console.log("FizzBuzz");  

//       }  else if (i % 3 === 0){
//                   console.log("Fizz"); 
//       } 
//             else if  (i % 5 === 0){
//                   console.log("Buzz");
//       } 
//             else {
//                   console.log(i);
//       }
// }



/**----------------------------------------------------------------------------- */
/* 
5. Inverser une chaîne
Écris une fonction qui prend une chaîne de caractères et retourne cette chaîne inversée.

Exemple :

javascript
Copier le code
inverser("bonjour"); // Retourne : "ruojnob"
inverser("JavaScript"); // Retourne : "tpircSavaJ"
*/
// ÉCRIRE ICI :

/**----------------------------------------------------------------------------- */
/* 
6. Filtrer les nombres pairs
Écris une fonction qui prend un tableau de nombres et retourne un nouveau tableau contenant uniquement les nombres pairs.

Exemple :

javascript
Copier le code
filtrerPairs([1, 2, 3, 4, 5, 6]); // Retourne : [2, 4, 6]
filtrerPairs([7, 11, 14, 18]);   // Retourne : [14, 18]
*/
// ÉCRIRE ICI :

/**----------------------------------------------------------------------------- */
/*
7. Factorielle
Écris une fonction qui calcule la factorielle d’un nombre donné.
Rappel : La factorielle de 5 (notée 5!) est 5 × 4 × 3 × 2 × 1 = 120.

Exemple :

javascript
Copier le code
factorielle(5); // Retourne : 120
factorielle(0); // Retourne : 1
*/
// ÉCRIRE ICI :

/**----------------------------------------------------------------------------- */
/**----------------------------------------------------------------------------- */
