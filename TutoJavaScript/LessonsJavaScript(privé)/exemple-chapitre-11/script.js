// Conditions IF, IF ... ELSE, IF ... ELSE IF ... ELSE

/* 
IF veut dire SI
*/

// var heure = 15;

// if (heure <= 18 == true) {
//   alert("15 <= 18 Heure correcte, on dira donc Bonjour");
// }
// // "15 <= 18 Heure correcte" s'affichera
// if (heure <= 18 == true) {
//   alert("15 <= 18 Heure correcte");
// }
// // "15 <= 18 Heure correcte" ne s'affichera

// if (heure <= 10 == false) {
//   alert("15 <= 10 Heure fausse");
// }
// // "15 <= 10 Heure correcte" s'affichera
// if (heure <= 10 == true) {
//   alert("15 <= 10 Heure fausse");
// }
// "15 <= 10 Heure correcte" ne s'affichera

// -------------------------------------
/* 
IF ... ELSE veut dire SI ... SINON

Permettra de renvoyer un bloc de code si on obtient la valeur attendu, 
sinon renverra un autre bloc de code si la on obtient pas la valeur attendue
*/

// var heure = 15;

// if (heure <= 10 == true) {
//   alert("15 <= 18 Heure correcte");
// } else {
//   alert("15 <= 10 Heure fausse");
// }

// ---------------------------------------
/* 
IF ... ELSE IF ... ELSE signifie si ... sinon si ... sinon

Permettra de gérer autant de cas qu'on souhaite et exécuter un code pour chaque nouveau cas créé
*/

// var heure = 12;

// if (heure < 12 == true) {
//   alert("C'est le matin");
// } else if ((heure == 12) == true) {
//   alert("Il est midi");
// } else if (heure <= 18 == true) {
//   alert("C'est l'après-midi");
// } else {
//   alert("C'est le soir");
// }

// On finira toujours par un ELS si il y a des ElSE IF
// ! Le code JavaScript sera lu de façon linéaire, dans l'ordre des conditions  !

// On veut commencer à filtrer des nombres
var heure = "9";

if ((typeof heure == "number") == true) {
  if (heure < 12 == true) {
    alert("C'est le matin");
  } else if ((heure == 12) == true) {
    alert("Il est midi");
  } else if (heure <= 18 == true) {
    alert("C'est l'après-midi");
  } else {
    alert("C'est le soir");
  }
} else {
  alert("Mauvais type de valeur");
}
