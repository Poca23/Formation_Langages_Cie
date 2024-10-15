// La concaténations

var prenom = "Claire ",
  nom = "Naudin";

/*   
    On va concaténer les trois variables ensemble et
    les stocker dans une nouvelle variable
*/

var moi = prenom + nom;

// La variable moi va stocker les valeurs précédentes
// On peut concaténer des valeurs entre elles

var lui = "Victor " + "Durand";

// Avec des variables et des valeurs

var sport = "courir";
var hobbie = "J'aime " + sport;

// On peut tout afficher au sein d'une instruction alert

alert(
  "Contenu de la variable moi : " +
    moi +
    "\nContenu de la variable toi : " +
    lui +
    "\nContenu de la variable hobbie : " +
    hobbie
);

// On va pouvoir additionner une chaîne de caractère et une variable entre eux

var x = 4 + 2 + "1";
var y = "1" + 2 + 4;
var z = 2 + "un" + 4;

// Tout sera concaténer, et non pas additionné

alert(
  "variable x : " +
    x +
    typeof x +
    "\nvariable y : " +
    y +
    typeof x +
    "\nvariable z : " +
    z +
    typeof x
);
/*
61 (string, chaîne de caractère)
124 (string, chaîne de caractère)
2un4 (string, chaîne de caractère)
*/
