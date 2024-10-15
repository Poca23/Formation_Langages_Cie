/*On veut déckarer une première varaiable  x  

        La variable x stockera le chiffre 25 :
        -On écrira le mot clé : var ;
        -Suivi de : x ;
        -Suivi de : = ;
        -Et on lui fait stocker la valeur : 25;
        -Et pour finir : le point virgule ;

        On va assigner une deuxième variable cette fois-ci majuscule :
        -On écrira : X (le nom des variables sont sensibles à la casse en Javascript)
        -On lui fera stocker la valeur : 100
        -On finira par : le point virgule ;

        On peut aussi stocker plusieurs variables d'un coup :
        -On séprarera plusieurs variables par des virgules, pas par des points virgules cette fois-ci; 
        -On aura donc besoin d'écrire le mot var qu'une seule fois.
        
        On déclarera les variable prénom, nom, département:
        -On écrira : var
        -Ensuite : prenom
        -Puis le égal = et la valeur qu'on veut lui attribuer : "Claire"
        -Une virgule : ,
        -Ensuite la deuxième variable : nom, le = et la valeur qu'on veut lui attribuer "Naudin"
        -Et la troisième variable abrégée dept = "Indre_et _Loire"
        -le tout fini d'un point virgule.

        On peut encore ne pas attribuer de variable immédiatement:
        -En ajoutera la variable : age 
        -Retour à la ligne;
        -On remet la variable : age
        -Suivi de : =
        -Et ensuite de la valeur voulu
        -Pour finir par le point virgule : ;
    !!!  Créer une variable comme ceci n'est pas recommandé !!!

        On préférera créer une valeur vide :
        -On ajoute : var
        -On déclarera la variable : ville
        -Puis : =
        -en mettant juste les guillemets mais sans valeur pour le moment

        Il est toujours préférable d'affecter une valeur nulle à une variable,
        plutôt que de déclarer une variable sans lui affecter de valeur du tout.
        -On ajoutera donc en revenant à la ligne : ville = Faye_la_Vineuse

        On créera une dernière variable qui va cette fois-ci stocker 
        un type particulier de valeur, qui est "un boolean".
        un boolean c'est soit la valeur : "True", soit la valeur : "False".
        Ca nous ervira plus tard à effectuer des test par exemple.

        -On crée donc la variable : var homme = 
        -Et on va donc stocker la valeur dans cette variable: true
        -On finit par : ;
*/

var x = 25;
/*On va pouvoir rajouter une autre valeur à la variable x*/
x = x + 5;
/* Ceci vaut dire qu'on va stocker en premier dans la variable x la valeur 25,
        et ensuite on va stocker dans x la valeur x + 5, c'est a dire la valeur précédente de x précédemment,
        + 5, donc au total x stocke maintenant 30 */

var X = 100;

var prenom = "Claire",
  nom = "Naudin",
  dpt = "37";

var age;
age = 35;

var ville = "";
ville: "Faye_La_Vineuse";

var homme = true;
