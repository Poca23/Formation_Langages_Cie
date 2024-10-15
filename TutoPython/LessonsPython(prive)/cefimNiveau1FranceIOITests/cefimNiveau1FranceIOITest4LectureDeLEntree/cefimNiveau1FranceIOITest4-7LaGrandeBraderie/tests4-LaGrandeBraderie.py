#Chaque année, c'est la tradition, une grande braderie est organisée dans le village et toute la région y participe. 
#C'est l'occasion pour les habitants de vendre quelques petits objets qui traînent dans le grenier depuis des années. 
#Afin que cela soit équitable, chaque vendeur doit avoir à sa disposition la même longueur de rue pour installer ses affaires. 
#Pour délimiter les emplacements, des marques sont faites à la peinture à intervalles réguliers. Les villageois vous 
#demandent votre aide pour calculer les positions (c'est-à-dire la distance par rapport au début de la rue) auxquelles 
#ces marques doivent être faites.

#Ce que doit faire votre programme :
#Il y a trois entiers à lire : 
# la position de départ positionDepart, 
# la largeur d'un emplacement largeurEmplacement 
# et le nombre de vendeurs nbVendeurs.

#Vous devez afficher une suite de nombres, partant de 
# positionDepart 
# et augmentant de largeurEmplacement à chaque fois.
#Il y a au total nbVendeurs augmentations à faire. 
# Vous devez afficher la valeur de chacun des nombres de la suite.

positionDepart = int(10)
largeurEmplacement = int(5)
nbVendeurs = int(3)

distance = positionDepart

for loop in range(1, nbVendeurs + 1):
    print(distance)
    distance = distance + largeurEmplacement
   
   
#Correction    
# positionDepart = int(input())
# largeurEmplacement = int(input())
# nbVendeurs = int(input())

# distance = positionDepart + largeurEmplacement

# for i in range(nbVendeurs + 1):
#     print(positionDepart + largeurEmplacement * i)
