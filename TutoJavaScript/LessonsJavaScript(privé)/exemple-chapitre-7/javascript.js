/* Les types de valeurs des variables  */

/*On va créer des variables qui vont stocker des valeurs de type "number" :
 -On va créer une variable : x
 -On va lui faire stocker la valeur : 25 (nombre positif)
 -On va créer une deuxième variable : y
 -On va lui faire stocker la valeur : -75 (nombre négatif)
 -On va créer une dernière variable : z
 -Auquel on stockera comme valeur : 3.14 (une valeur décimale avec annotations anglosaxonnes)
*/

var x = 25;
var y = -75;
var z = 3.14;

/*On va créer des variables qui vont stocker des valeurs de type "string" :
-On va créer une variable : prénom 
-On stockera dans cette variable prenom la valeur : Claire
-On créera une deuxième variable : nom
-On stockera dans cette variable nom la valeur : Naudin
-On ajoutera encore une variable : sexe
-Dans laquelle on stockera la valeur : Je suis une femme" (pas d'obligation de stocker juste un mot)

Les apostrophes ou les guillemets, les deux fonctionnent pour ce type de variable, c'est au choix.
*/

var prenom = "Claire";
var nom = "Naudin";
var sexe = "Je suis une femme";

/*CEPENDANT,
Si la valeur stockée contient elle-même des apostrophes ou des guillemets, 
il faudra les échapper au moyen d'un anti-slash, 
selon ce qu'on aura choisit pour entourer la valeur !

 -On va créer une autre variable qu'on va appeler : dpt (department)
 -On va stocker la variable par des guillemets : Je vis dans le departement 37 de l'Indre-et-Loire
 Le javascript va croire que la chaine de caractère s'arrête au nombre qu'on voudra entourer de guillemets, 
 donc il va falloir échapper ces guillemets si on veut que notre nombre 37 soit bien entre guillemets,
 On utilisera des antislash (\...\)

-On va créer une deuxième variable : ville
-On stockera dedans la valeur : J'habite à Faye-La-Vineuse
Un exemple ou il y a des apostrophes, que l'on devra donc échapper aussi pour qu'il prenne la chaîne de caractère en entier.
-On l'entourera donc d'antislash à nouveau : \...\

La REPETITION des signes doit être échappée. 
SI on met des guillemets, et que notre valeur en a aussi => antislash
SI on met des apostrophes, et que notre valeur en a aussi => pas besoin d'antislash
SI on met des guillemets, et que notre valeur contient des apostrophes => pas besoin d'antislash

Deux autres exemples de variables à ajouter :
-variable dpt2 : Je vis dans le 37 (avec apostrophes)
-variable ville2 : J'habite à Faye-la-Vineuse (avec guillemets)
*/
var dpt = 'Je vis dans le departement "37" de l\'Indre-et-Loire';
var ville = "J'habite à Faye-la-Vineuse";
/*Il faut bien penser à ce que l'on mettra comme valeur pour savoir quand mettre des guillemets ou des apostrophes,
 afin d'éviter d'échapper trop de choses pour plus de simplicité
*/

/*On va créer des variables qui vont stocker des valeurs de type "boolean" :
-On créera la variable : a
-Elle aura comme valeur boolean : true

SUR LA MEME LIGNE, séparé d'une virgule

-On peut créer une variable : b
-Qui sera quand à elle égale à la valeur boolean : false

ON REVIENT A LA LIGNE

-On peut créer aussi une variable : c
-Qui cette fois-ci va stocker LA CHAINE DE CARACTERE : true 
(totalement différent du boolean true, pas le même type de valeur, on ne pourra pas effectuer les mêmes valeurs sur a et c)
*/

/*On va créer des variables qui vont stocker des valeurs de type null, undefined et NaN :
-On va ajouter une variable : n
-On va lui faire stocker la valeur : null (sans apostrophes et sans guillemets car on ne veut pas créer de chaînes de caractères)
-On créera aussi une variable : u
-Qui stockera la valeur : undefined
-On ajoutera aussi ensuite une variable : nn
-Qui aura à stocker pour sa part la valeur : NaN (cette valeur n'est pas un nombre)
*/

var u = undefined;
var nn = NaN;

/*On va créer des variables qui vont stocker des valeurs de type "boolean" :
On avait déjà utilisé la varibale x pour stocker la valeur 25, on peut tout à fait lui faire stocker une autre valeur.
-On utilise à nouveau la variable  : x
-Pour cette fois-ci lui faire stocker la valeur : quatre
*/

var x = "quatre";
/*(la valeur de chaîne de caractère quatre va remplacer la valeur 25 )*/

/*On va utiliser la fonction typeof():
Pour afficher le résultat de typeof(), on utilisera une instruction alert.
-On va créer un premier script, qui va utiliser la fonction typeof() et l'instruction alert, 
afin d'afficher le type de valeur contenue dans certaines variables.
-L'instruction alert va servir à afficher une boîte de dialogue dans notre fenêtre.
Tous le code sera à l'intérieur de alert.

-entre les parenthèses de alert on créera un premier texte : 
- "Variable x : " + typeof(x) +
-On retourne à la ligne : "\nVariable y : " + typeof(y) +
-On retourne à la ligne : "\nVariable a : " + typeof(a) +
-On retourne à la ligne : "\nVariable n : " + typeof(n) +
-On retourne à la ligne : "\nVariable u : " + typeof(u) +
-On retourne à la ligne : "\nVariable nn : " + typeof(nn) +
On terminera par un  ; pour finir l'instruction en javascript (toujours)
*/
var n = null;
alert(
  "variable x:" +
    typeof x +
    "\nvariable y:" +
    typeof y +
    "\nvariable a:" +
    typeof a +
    "\nvariable n:" +
    typeof n +
    "\nvariable u:" +
    typeof u +
    "\nvariable nn:" +
    typeof nn
);
/*
Le \n sert à faire un retour à la ligne dans l'affichage final.
On va vouloir afficher le texte comme suivant : 

1) Les textes entre guillemets sont les textes qu'on va afficher ainsi : 
variable x :
variable y :
etc ...
2) Pour une meilleur visibilité au niveau de l'affichage on va utiliser des antislash n (\n),
afin d'effectuer un retour à la ligne, comme on pourrait utiliser un élément br en html
3) Le signe + sert à concaténer : C'est à dire mettre bout à bout plusieurs chaînes de caractères
 Typeof(x) va renvoyer le type de valeur de notre variable x, comme x stocke "quatre" à la fin, ça sera string

 On veut donc concaténer notre chaîne de caractère : variable x: avec le mot string,
 on aura donc, variable x: string

 On a : "du texte :" puis le résultat d'une fonction typeof(), etc ...

 typeof() va donc renvoyer le type des variables qui sont entre parenthèse.
 On enregistre tout et on affiche dans le navigateur.
On obtient :
variable x:string (stocke la chaîne de caractère "quatre")
variable y:number (stocke un chiffre, un nombre, une décimale)
variable a:boolean (stocke valeur true ou false)
variable n:object (stocke la valeur null, qui n'a pas de valeur, c'est un résultat qui fait débat)
variable u:undefined (stocke une valeur non définie)
variable nn:number (stocke une valeur number qui est étrange parce que la valeur stockée est NaN)
*/
