# Dans une cité commerçante, il est important que les habitants soient forts en calcul mental 
# afin de pouvoir négocier leurs prix et choisir les meilleurs produits sans se faire avoir. 
# Le département de pédagogie de l'université a donc été sollicité afin de mettre au point 
# des exercices stimulants pour les enfants, qui vont les inciter à travailler leur calcul mental.

# Réalisant le potentiel que peut avoir votre robot dans un cadre pédagogique, 
# les chercheurs vous demandent de mettre au point un programme capable 
# de faire jouer de manière automatisée un enfant au jeu du « c'est plus, c'est moins » : 
# l'enfant doit deviner un nombre secret en faisant des propositions, 
# et on lui répond chaque fois par « c'est plus » ou « c'est moins », 
# jusqu'à ce qu'il ait trouvé le bon nombre.

# L'objectif est bien sûr pour les enfants de trouver le bon nombre le plus rapidement possible !

# Ce que doit faire votre programme :
# Votre programme doit d'abord lire un entier, le nombre que l'enfant devra trouver. 
# Ensuite, il devra lire les propositions du joueur, 
# et afficher à chaque fois le texte « c'est plus » (l'enfant a proposé un nombre trop petit) 
# ou « c'est moins » (l'enfant a proposé un nombre trop grand) selon les cas, 
# et recommencer tant que l'enfant n'a pas trouvé le bon nombre.

# À la fin, il faudra afficher le texte « Nombre d'essais nécessaires : » 
# puis, à la ligne en dessous, le nombre d'essais qui ont été nécessaires.

# On vous garantit que l'enfant finira par trouver la bonne valeur !

# Exemples
# Exemple 1
# entrée :

# 5
# 1
# 2
# 3
# 4
# 5
# sortie :

# c'est plus
# c'est plus
# c'est plus
# c'est plus
# Nombre d'essais nécessaires :
# 5
      
nbATrouver = int(input())
nbPropose = int(input())

nbEssais = 1

while (nbPropose != nbATrouver):
   if (nbPropose < nbATrouver):
       print("c'est plus")
   if (nbPropose > nbATrouver):
       print("c'est moins")
   nbPropose = int(input())
   nbEssais = nbEssais + 1
print("Nombre d'essais nécessaires :")    
print(nbEssais)