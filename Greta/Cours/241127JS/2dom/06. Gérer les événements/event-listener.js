/**
 * --------------------------------------------
 * 1 - Au click sur le bouton "Cacher" : 
 * 
 * → Cacher le paragraphe
 * → Changer le texte du bouton "Cacher" en "Afficher"
 * 
 * Si le bouton est cliqué de nouveau : 
 * 
 * → Le paragraphe s'affiche de nouveau
 * → Changer le texte du bouton "Afficher" en "Cacher"
 * --------------------------------------------
 */


/**
 * --------------------------------------------
 * 2 - Création d'une calculatrice simple : 
 * 
 * → Créer 3 champs inputs :
 *   - Le premier et le troisième sont de type number et permettent de saisir un nombre (1 et 2 par exemple)
 *   - Le second est de type texte et permet de saisir un opérateur (+, -, *, /)
 * 
 * → Créer un bouton qui déclenche le calcul des 2 inputs par l'opérateur
 * 
 * →  Afficher le résultat dans le HTML. Tant qu'il n'y a pas de résultat, afficher un petit texte en attente.
 * --------------------------------------------
 */




/**
 * --------------------------------------------
 * 3 - Créer un container avec 3 div (sans passer par JS, en HTML/CSS classique). Chaque div propose un produit à acheter avec une image, un titre, un petit paragraphe et un bouton "Acheter 🤓"
 * 
 * → Attacher un écouteur d'événément de type "click" sur chaque bouton "Acheter 🤓". 
 * → Si une div est cliquée, le produit est posusé dans une propriétée "selectedProducts". 
 * → Cette propriété est affichée dans le DOM, et pour chaque nouveau produit sélectionné, le DOM est mis à jour. 
 * 
 * Le pôle Marketing vous demande d'ajouter un bout de code afin de relever l'intérêt des utilisateurs vis-à-vis des produits proposés sur la e-boutique
 * De votre côté, vous imaginez le procédé suivant : "j'écoute le nombre de fois où l'utilisateur passe sa souris sur la div de l'un des produits"
 * 
 * → Attacher un écouteur d'événément de type "mouseover" sur chaque div. 
 * → Compter le nombre de fois où la souris de l'utilisateur passe sur chaque div. Dès lors que la souris survole une div, mettre à jour le "nombre de fois où la div X a été survolée" dans l'objet utilisateur
 * --------------------------------------------
 */


/**
 * --------------------------------
 * 4 - Compter le nombre de fois où chaque "card" est survolée par la souris de l'utilisateur
 * → Créer 5 compteurs HTML : un pour chaque card + un compteur global.
 * → Dès qu'une "card" est survolée, l'utilisateur doit voir le compteur lié à l'élément, ainsi que le compteur global, être incrémentés. 
 * 
 * 
 * Exemple :
 *
 * Au début, tous les compteurs sont à 0.
 * 
 * Si mon utilisateur survole une première fois la "card" n°1, il doit voir écrit : 
 * → card n°1 : 1 fois survolée
 * → card n°2 : 0 fois survolée
 * → card n°3 : 0 fois survolée
 * → card n°4 : 0 fois survolée
 * → Total : 1 survol
 * 
 *  * Si mon utilisateur survole ensuite une première fois la "card" n°2, il doit voir écrit : 
 * → card n°1 : 1 fois survolée
 * → card n°2 : 1 fois survolée
 * → card n°3 : 0 fois survolée
 * → card n°4 : 0 fois survolée
 * → Total : 2 survols
 * 
 * Etc...
 * 
 * 
 * → Si toutes les "card" ont été survolées, un texte doit apparaître "Bien joué cher utilisateur"
 * → Si les "card" ont été survolées plus de 100 fois, il doit voir apparaître l'image d'un charmant phacochère. 
 * 
 * 
 * Lors d'un survol de souris, ajouter à la "card" survolée une classe. Lorsque la "card" n'est plsu survolée, retirer cette classe.
 * Renseigner le CSS de cette classe directement depuis le fichier CSS. 
 * --------------------------------
 */
