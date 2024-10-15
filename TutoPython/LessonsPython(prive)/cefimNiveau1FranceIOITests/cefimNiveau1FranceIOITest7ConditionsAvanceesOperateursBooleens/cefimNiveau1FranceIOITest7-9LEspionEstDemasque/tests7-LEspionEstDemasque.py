# Grâce à un certain nombre d'informateurs plus ou moins fiables, 
# le chef de la police a recueilli des indications qui devraient 
# lui permettre enfin de démasquer cet espion qui lui échappe depuis des semaines. 
# La population de la ville étant relativement importante, 
# il vous demande votre aide afin d'automatiser un peu les choses. 
# Vous devez estimer la probabilité qu'une personne soit un espion.

# Ce que doit faire votre programme :
# Votre programme doit lire entier : un nombre de personnes à considérer. 
# Ensuite, pour chaque personne, il doit lire son signalement sous la forme de cinq entiers : 
# sa taille en centimètres, 
# son âge en années, 
# son poids en kilogrammes, 

# un entier valant 1 si la personne possède un cheval 
# et 0 sinon, 

# et un entier valant 1 si la personne à les cheveux bruns 
# et 0 sinon.

# On veut déterminer pour chaque personne à quel point elle correspond aux 5 critères suivants :

# il aurait une taille supérieure ou égale à 178 cm et inférieure ou égale à 182 cm ;
# il aurait au moins 34 ans ;
# il pèserait strictement moins de 70 kg ;
# il n'a pas de cheval ;
# il a les cheveux bruns.
# Lorsque cela n'est pas précisé explicitement, les inégalités sont au sens large.

# Pour chaque personne, vous devez tester tous les critères. 
# S'ils sont vérifiés tous les 5, vous devez afficher « Très probable ». 
# Si seulement 3 ou 4 sont vérifiés, vous devez afficher « Probable ». 
# Si aucun n'est vérifié, vous devez afficher « Impossible », 
# et dans les autres cas, vous devez afficher « Peu probable ».


nbSuspects = int(input())

for loop in range(nbSuspects):
    taille = int(input())
    age = int(input())
    poids = int(input())
    possedeCheval = int(input())
    brun = int(input())

    criteres = 0
    if (178 <= taille <= 182):
        criteres += 1
    if (age >= 34):
        criteres += 1
    if (poids < 70):
        criteres += 1
    if (possedeCheval == 0):
        criteres += 1
    if (brun == 1):
        criteres += 1
        
    if (criteres == 5):
        print("Très probable")
    elif (3 <= criteres <= 4):
        print("Probable")
    elif (criteres == 0):
        print("Impossible")    
    else: 
        print("Peu probable")

#Correction :
nbPersonnes = int(input())
for loop in range(nbPersonnes):
   nbCriteres = 0
   taille = int(input())
   if (178 <= taille) and (taille <= 182):
      nbCriteres = nbCriteres + 1
   age = int(input())
   if age >= 34:
      nbCriteres = nbCriteres + 1
   poids = int(input())
   if poids < 70:
      nbCriteres = nbCriteres + 1
   aCheval = int(input())
   if aCheval == 0:
      nbCriteres = nbCriteres + 1
   aLesCheveuxBruns = int(input())
   if aLesCheveuxBruns == 1:
      nbCriteres = nbCriteres + 1
   
   if nbCriteres == 0:
      print("Impossible")
   elif nbCriteres == 5:
      print("Très probable")
   elif nbCriteres >= 3:
      print("Probable")
   else:
      print("Peu probable")