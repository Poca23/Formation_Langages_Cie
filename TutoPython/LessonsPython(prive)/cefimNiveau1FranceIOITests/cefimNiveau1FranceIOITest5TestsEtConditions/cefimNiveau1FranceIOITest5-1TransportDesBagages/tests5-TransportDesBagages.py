#Alors que vous quittez le village, les villageois vous offrent de nombreux cadeaux : 
# provisions, vêtements chauds, boissons… Vous ne pourrez jamais porter tout cela tout seul ; 
# vous décidez donc de donner une partie de ces objets à votre robot, après les avoir rassemblés en de gros paquets, 
# tous de même masse. Aura-t-il la force de tout porter ?

# Ce que doit faire votre programme :
# Votre programme lira deux entiers : 
# le nombre de paquets et le poids d'un paquet. 
# Si le poids total est strictement supérieur à 105 kg, votre programme devra alors afficher le texte « Surcharge ! ».

# Exemples
# Exemple 1
# entrée :

# 10
# 15
# sortie :

# Surcharge !
# Exemple 2
# entrée :

# 3
# 7
# sortie :

# Conditionner une action
# La célèbre attraction du train fou est interdite aux moins de 10 ans. On souhaite écrire un programme qui demande à l'utilisateur son âge et qui, si la personne a moins de 10 ans, affiche le texte « Accès interdit » ; ce qui peut se rédiger comme cela :

# âge <- lireEntier()
# Si âge < 10
#    Afficher "Accès interdit"
# Voyons comment cela se traduit en Python :

# âge = int(input())
# if âge < 10:
#    print("Accès interdit")
# On écrit donc le mot-clef if, la traduction en anglais de « si », la condition à tester, à savoir âge < 10, puis on termine la ligne avec un deux-points, comme on le faisait pour la boucle de répétition.

# Ainsi, l'accès est interdit à un enfant de 8 ans :

# ↳
# 8
# ↳
# Accès interdit
# À l'opposé, le programme n'affiche rien pour un âge de 13 ans :

# ↳
# 13 
# ↳
 
# Pour exprimer la condition du « si » dans le programme, on a utilisé le symbole <, qui est l'opérateur de comparaison strictement inférieur. De manière symétrique, l'opérateur > permet de tester si un nombre est strictement supérieur à un autre.

# Lorsqu'on veut tester si un nombre est inférieur ou égal à un autre, on utilise le symbole <=. De manière symétrique, le symbole >= permet de tester si un nombre est supérieur ou égal à un autre.

# Par exemple, le code suivant permet de tester si la température de l'eau a atteint 100 degrés.

# température = int(input())
# if température >= 100:
#    print("L'eau bout !")

nbPaquet = int(input())
poids = int(input())
totPoids = nbPaquet * poids

if totPoids > 105:
    print("Surcharge !")
    
#Exemple :
nbPaquet = int(10)
poids = int(15)
totPoids = nbPaquet * poids

if totPoids > 105:
    print("Surcharge !")