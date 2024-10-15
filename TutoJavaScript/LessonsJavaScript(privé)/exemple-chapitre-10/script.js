// Présentation des conditions

// On va tester si une valeur est supérieur, inférieur ou égale à une autre valeur
// Selon le résultat du test on pourra exécuter un autre bloc de code à l'inté"rieur de notre condition
/*  
    Pour effectuer des tests on va avoir besoin d'OPERATEUR DE COMPARAISON :
    
    EGAL :
    == est égal à (en valeur)
    === est égal à (en valeur et en type)

    DIFFERENT :
    != est différent de (en valeur)
    !== est différent de (en valeur ou en type)

    INFERIEUR :
    < est strictement inférieur à
    <= est inférieur ou égale à

    SUPERIEUR :
    > est strictement supérieur à
    >= est supérieur ou égale à

*/

var x = 7,
  y = 14;

var vrai = x < y;
var faux = 14 >= 7;

var egalVal = 4 == "4";
var egalValType = 4 === "'4";

var difVal = 4 != "4";
var difValType = 4 !== "4";

alert(
  "vrai stocke : " +
    x +
    "\n faux stocke : " +
    y +
    "\n egalVal stocke : " +
    egalVal +
    "\n egalValType stocke : " +
    egalValType +
    "\n difVal stocke : " +
    difVal +
    "\n difValType stocke : " +
    difValType
);
