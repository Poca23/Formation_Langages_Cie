// Opérations sur les variables
// On va créer trois varibales x, y et z

var x = 5,
  y = 10,
  z = -2;

// On va commencer par rajouter 1 à x
// x vaut maintenant 6, puisqu'on additionne l'ancienne valeur de x à 1
// On peut encore soustraire 2 à x
/* x vaut maintenant 4, il stocke la valeur 4, 
car on récupère la dernière valeur connue de x qui est 6
*/
// On peut aussi effectuer des multiplications
// La nouvelle valeur de y est 20, y stocke maintenant le nombre 20
// On peut créer aussi des variables pour stocker le résultat d'opérations entre variables
//x vaut 4 et y vaut 20, la varibale mutl va stocker le nombre 80
// On peut créer une variable pour diviser des variables entre elles
// y vaut 20 et z vaut -2, la variable divi va stocker la valeur -10
/* On peut calculer aussi le modulo, il représente le reste de la division entière
d'un nombre par un autre, si on divise 13 par 3, on ne conserve que la partie entière,
le résultat est 4, il reste 1, 1 est donc le modulo, son signe est le % */
// On veut connaitre le modulo du reste de la division entière de 13 par 3 qui est 1

// On peut s'assurer des résultats en affichant en donnant l'instruction alert

// On va créer une vraie variable priorite

/*var priorite = x + ((y / (4 + z)) % 3);
alert(priorite);*/

/* Ordre de priorité mathématique :
-entre parenthèse : 4 + z = 2;
-ensuite la division : y / 2 (résultat de 4 + z) = 5
-après le modulo de 5 % 3 = 2;
-on ajoute x à 2 = 7.
*/

/* Si on souhaite ajouter 2 à la valeur précédente de x, 
plutôt qu'écrire :
x = x + 2;
On va écrire :
x +=2
*/
x += 2; // x = x + 2;
// x stockera bien la valeur 7 (5 + 2)

x -= 3; // x = x - 3;
// x (sa dernière valeur 7) stockera donc la valeur 4 (7 - 3)

y = y * x;
y *= x; // y = y * x;

y /= 2; // y = y / 2;

y %= x; // y = y % x;

alert(x);
