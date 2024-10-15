#Au village, la passion pour le calcul mental est une tradition : 
#des jeux centrés sur cette pratique sont régulièrement organisés 
#par les habitants. Pour chaque jeu, ils décident d'abord combien 
#de nombres devront être prononcés ; puis chaque joueur doit effectuer 
#un calcul déterminé par les règles du jeu. Chaque fois que quelqu'un 
#se trompe et qu'un autre joueur s'en rend compte, le joueur qui s'est 
#trompé doit se corriger, et il devra un Gombo (une friandise du coin) 
#à celui qui lui a signalé son erreur le plus rapidement.

#Vous aimeriez participer, mais les habitants vont si vite et manipulent 
#des nombres si grands que vous êtes tout de suite dépassé par les calculs ! 
#Alors qu'un nouveau jeu se prépare, vous décidez finalement d'utiliser votre 
#robot pour vous aider à rivaliser.

#Ce que doit faire votre programme :
#Un nombre de départ va être donné par le chef du village. 
#La personne qui suit doit le multiplier par 2, 
#puis la suivante doit multiplier le nombre obtenu par 3, 
# celle d'encore après doit multiplier le total par 4… 
#jusqu'à ce que les nbNombres calculs aient été effectués.

#Le chef a choisi le nombre 66 pour démarrer le jeu. 
#Votre programme lira l'entier nbNombres, 
#la quantité de nombres attendue par le jeu (nombre de départ inclus). 
#Il devra ensuite afficher tous les nombres de la partie afin de vous rendre imbattable !

#Exemples :

#EXAMPLE 1
# input:

# 4
# output:

# 66
# 132
# 396
# 1584
# EXAMPLE 2
# input:

# 1
# output:

# 66
# COMMENTS
# Les valeurs du premier exemple correspondent aux calculs suivants :

# 66
# 66 × 2 = 132
# 132 × 3 = 396
# 396 × 4 = 1584

nbNombres = int(input())
nbreDeMultiplication = 0
total = 66

for loop in range(nbNombres):
   nbreDeMultiplication = nbreDeMultiplication + 1
   total = total * nbreDeMultiplication
   print(total)


#Correction :
nbNombres = int(input())
étape = 0
résultat = 66
for loop in range(nbNombres):
   étape = étape + 1
   résultat = résultat * étape
   print(résultat)