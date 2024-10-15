# Le village dans lequel vous avez passé la nuit est en pleine effervescence au matin : 
# encore une attaque de worgs pendant la nuit ! 
# Les worgs sont de redoutables loups qui vivent sur Algoréa et qui s'attaquent au bétail... 
# et parfois même aux enfants.

# C'est décidé, il va falloir construire une grande palissade tout autour du village. 
# Les habitants insistent pour que cette clôture soit rectangulaire et ait une face au Nord, 
# une au Sud, une à l'Est et une à l'Ouest, quitte à devoir travailler un peu plus que nécessaire. 
# Ils ont maintenant besoin de votre aide pour savoir la quantité de bois dont ils vont avoir besoin 
# pour construire cette palissade.

# Ce que doit faire votre programme :
# Le programme doit d'abord lire un entier strictement positif correspondant au nombre de maisons. 
# Ensuite, pour chaque maison, il doit lire la position horizontale (l'abscisse, le "x") 
# et sa position verticale (l'ordonnée, le "y") de cette maison. 
# Toutes les abscisses et ordonnées sont des entiers compris entre zéro et 1 million.

# Le programme doit alors afficher le périmètre de la plus petite clôture rectangulaire englobant toutes les maisons. 
# Ce rectangle doit avoir ses côtés parallèles aux axes du repère, comme montré sur l'illustration.

# Représentation du premier exemple
# Représentation graphique du premier exemple
# Exemple
# entrée :

# 4
# 1
# 5
# 5
# 3
# 4
# 6
# 2
# 9
# sortie :

# 20

nbMaisons = int(input())

xMin = 1000000
xMax = 0
yMin = 1000000
yMax = 0

for loop in range(nbMaisons):
    x = int(input())
    y = int(input())
    
    if (x < xMin) :
        xMin = x
    if (x > xMax) :
        xMax = x
        
    if (y < yMin) :
        yMin = y
    if (y > yMax) :
        yMax = y
        
print(2 * (xMax - xMin + yMax - yMin))

#Correction :
nbMaisons = int(input())
xMin = 1000 * 1000
xMax = 0
yMin = 1000 * 1000
yMax = 0
for loop in range(nbMaisons):
   posX = int(input())
   posY = int(input())
   if posX < xMin:
      xMin = posX
   if posX > xMax:
      xMax = posX
   if posY < yMin:
      yMin = posY     
   if posY > yMax:
      yMax = posY
      
largeur = xMax - xMin
hauteur = yMax - yMin
perimetre = 2 * (largeur + hauteur)
print(perimetre)