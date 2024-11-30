 /**
   * -------------------------------------------------------
   * 1 - Vous êtes un pilote de F1.
   * 
   * Créer une boucle qui permette d'afficher "Tour n°X" sur vos 50 tours de circuits
   * 
   * Ex : 
   * Tour n°1
   * Tour n°2
   * Tour n°3
   * etc...
   * -------------------------------------------------------
*/

// for (i=0; i < 51; i++){
//   console.log(`Tour n°${i}`); 
// }


 /**
   * -------------------------------------------------------
   * 2 - Vous êtes (encore) un pilote de F1 mais cette fois-ci, vous avez avec vous un copain-pilote avec vous parce que vous avez deux fois plus de tours à faire.
   * 
   * Créer une boucle qui affiche tous les tours 🔂
   * Si vous êtes au premier tour, afficher "Zé bartiii, c'est à conducteur 1️⃣ de démarrer"
   * Si vous êtes au tour 25, afficher "Il faut changer de conducteur, c'est à conducteur 2️⃣"
   * Si vous êtes au tour 50, afficher "Il faut changer de conducteur, c'est à conducteur 1️⃣"
   * Si vous êtes au tour 75, afficher "Il faut changer de conducteur, c'est à conducteur 2️⃣"
   * Si vous êtes au tour 100, afficher "C'est fini, bien joué à tous, HIGH FIVE ! 🙌😎"
   * -------------------------------------------------------
*/


// for (i = 0; i < 101; i++){
//   if (i === 0){
//     console.log(`Zé bartiii, c'est à conducteur 1️⃣ de démarrer`);
//   }
//   if (i === 26){
//     console.log(`Il faut changer de conducteur, c'est à conducteur 2️⃣`);
//   }
//   if (i === 51){
//     console.log(`Il faut changer de conducteur, c'est à conducteur 1️⃣`);
//   }
//   if (i === 76){
//     console.log(`Il faut changer de conducteur, c'est à conducteur 2️⃣`);  
//   }
//   if (i === 101){
//     console.log(`C'est fini, bien joué à tous, HIGH FIVE ! 🙌😎`);
//   }
// }


 /**
   * -------------------------------------------------------
   * 3 - Vous êtes (toujours) un pilote de F1, sur 101 tours. Vous devez maintenant faire attention à votre essence. 
   * 
   * Votre réserve de carburant est de 74L.
   * Chaque tour consomme 7L.
   * 
   * Créer une boucle qui affiche tous les tours et le fuel restant à la fin de chaque tour 🔂. Ex : "Tour n°88, Fuel restant : 19"
   * Si vous allez être à court de carburant au prochain tour : 
   *    afficher en warning : "Attention carburant à recharger au prochain tour⛽️"
   *    recharger le carburant le tour suivant
   * Une fois le carburant rechargé, afficher en warning : "Le refuel a été fait 🙌😎"
   * Une fois la course terminée, afficher le nombre total de refuel qui aura été nécéssaire. Ex : "Nombre total de refuel :  2"
   * Vous devez obtenir le résultat de la capture d'écran "boucles-basiques-resultat"
   * -------------------------------------------------------
*/


let nbTurnTotal = 101; // Nombre de tours total
let nbRefuels = 0; // compteur nombre de fois ou on recharge le carburant dans le réservoir
let qteFuelRestant = 74; // quantité de carburant restante dans le réservoir
let consoByTurn = 7; // Consommation par tour

for (let i = 1; i <= nbTurnTotal; i++){  
  console.log(`Tour N°${i}, il reste ${qteFuelRestant}L`);
  
  if (qteFuelRestant < consoByTurn){
    console.warn(`Attention au carburant mon vieux, sinon, pour rouler t'auras que des pneus`);
    qteFuelRestant = 74; // On recharge le carburant
    nbRefuels++ // On incrémente le compteur recharge de 1
    console.log(`Le carburant est mis, roule ma poule !`); 
  }

  qteFuelRestant -= consoByTurn; //On enlève 7L à chaque tour
}

console.log(`Tu as du remettre le jus dans ton engin ${nbRefuels} fois ma poule. Tu me coutes trop cher, t'es viré ! :)`);


