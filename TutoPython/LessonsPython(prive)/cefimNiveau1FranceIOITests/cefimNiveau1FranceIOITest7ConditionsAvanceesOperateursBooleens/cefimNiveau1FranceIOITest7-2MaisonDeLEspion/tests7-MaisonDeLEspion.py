# On sait qu'un espion est présent dans la ville mais, grâce à des recoupements d'informations, 
# il a été possible de déterminer que l'espion était forcément dans une certaine zone de la ville. 
# Le gouverneur va donc envoyer des soldats fouiller chaque maison et interroger les habitants. 
# Afin de pouvoir estimer combien de temps va durer l'opération, 
# il souhaiterait savoir combien de maisons sont présentes dans la zone en question.

# Ce que doit faire votre programme :
# On vous décrit une zone de recherche rectangulaire, parallèle aux axes, 
# puis la position d'un certain nombre de maisons. 
# Écrivez un programme qui détermine combien de maisons sont dans cette zone.

# Votre programme devra lire, dans l'ordre : 
# l'abscisse minimale, l'abscisse maximale, 
# l'ordonnée minimale et l'ordonnée maximale du rectangle. 
# Il lira ensuite le nombre total de maisons, puis pour chaque maison, son abscisse et son ordonnée.

# Votre programme devra déterminer puis afficher le nombre de maisons qui se trouvent dans la zone de recherche. 
# Si une maison est exactement sur le bord de la zone, elle doit ête comptée.

# Sur l'exemple suivant, il y a 12 maisons, dont 5 sont dans la zone de recherche (en bleu) :
# Plan explicatif

# Exemple
# entrée :

# 1
# 4
# 1
# 8
# 12
# 1
# 7
# 1
# 9
# 2
# 3
# 3
# 2
# 3
# 4
# 3
# 6
# 3
# 9
# 5
# 3
# 5
# 8
# 7
# 5
# 8
# 2
# 8
# 8
# sortie :

# 5

xMin = int(input())
xMax = int(input())

yMin = int(input())
yMax = int(input())

nbTotalMaison = int(input())

nbMaisonSuspectes = 0

for loop in range(nbTotalMaison):
    x = int(input())
    y = int(input())
    if (xMin <= x <= xMax and yMin <= y <= yMax):
        nbMaisonSuspectes += 1

print(nbMaisonSuspectes)

#Correction :
xMin = int(input())
xMax = int(input())
yMin = int(input())
yMax = int(input())
nbMaisons = int(input())
nbAFouiller = 0
for loop in range(nbMaisons):
   x = int(input())
   y = int(input())
   if (xMin <= x) and (x <= xMax) and (yMin <= y) and (y <= yMax):
      nbAFouiller = nbAFouiller + 1
print(nbAFouiller)
