/**
 * -------------------------------------------------------
 * 1 - Écrire une fonction qui prend 2 paramètres et qui retourne la somme de ces 2 paramètres. Afficher le résultat dans la console.
 * -------------------------------------------------------
 */

function somme(a, b) {
  return a + b;
}
console.log(somme(1, 2));

/**
 * -------------------------------------------------------
 * 2 - Écrire une fonction qui prend 2 paramètres et qui retourne la somme de :
 *  → la raçine carrée du premier paramètres
 *  → le second paramètre à la puissance 7
 *  Afficher le résultat dans la console.
 * -------------------------------------------------------
 */

function somme2(a, b) {
  return a + b;
}
console.log(somme2(Math.sqrt(4), Math.pow(2, 7)));
/**
   * -------------------------------------------------------
   * 3 - Créer une fonction qui vérifie si l’utilisateur est apte à apprendre du Javascript : 
    avec prompt, demander successivement à l’utilisateur les deux langages de programmation à apprendre avant de démarrer le JS
    → S’il répond successivement HTML puis CSS, alors la fonction retourne vrai ; sinon faux.
    → Si l’exécution de la fonction retourne vrai, alors la console affiche “Bienvenue en JS jeune éphèbe”
    → Si l’exécution de la fonction retourne faux, alors la console affiche “Solidifie tes acquis : rien n’est impossible à qui rêve, ose, travaille et n’abandonne jamais”
   * -------------------------------------------------------
*/

function learnJavascript(langage1, langage2) {
  if (langage1 === "HTML" && langage2 === "CSS") {
    return true;
  } else {
    return false;
  }
}
let langageHTML = prompt(
  "Quel est le premier langage informatique à connaître avant d'aborder le JavaScript ?"
);
let langageCSS = prompt(
  "Quel est le DEUXIÈME langage informatique à connaître avant d'aborder le JavaScript ?"
);

if (learnJavascript(langageHTML, langageCSS)) {
  console.log("Bienvenue en JS jeune éphèbe");
} else {
  console.log(
    "Solidifie tes acquis : Ose, travaille et n’abandonne jamais. Sois le pélerin qui garde les yeux sur le chemin, et non le sommet de la montagne. Rien n’est impossible à qui rêve"
  );
}
