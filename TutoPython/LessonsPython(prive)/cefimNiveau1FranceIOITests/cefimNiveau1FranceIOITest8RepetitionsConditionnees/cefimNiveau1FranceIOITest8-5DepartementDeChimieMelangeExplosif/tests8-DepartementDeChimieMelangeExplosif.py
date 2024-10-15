# Les chimistes de l'université ont mis au point un nouveau procédé de fabrication d'un onguent 
# qui permet une cicatrisation très rapide des blessures. 
# Ce procédé est cependant très long et nécessite une surveillance 
# de tous les instants de la préparation en train de chauffer, 
# et ce parfois pendant des heures. 
# Confier cette tâche à un étudiant n'est pas possible, 
# ils s'endorment toujours ou ne font pas attention… et cela risque alors d'exploser !

# Un dispositif automatique de surveillance de la préparation serait donc intéressant. 
# Celui-ci surveillerait la température toutes les 15 secondes, 
# et si celle-ci devient anormale alors une alarme devrait sonner, 
# afin de prévenir tout le monde.

# Ce que doit faire votre programme :
# Votre programme devra lire trois entiers : 
# le nombre total de mesures envisagées 
# ainsi que la température minimum 
# et maximum autorisées. 
# Les entiers suivants seront les différentes températures relevées au cours du temps.

# Tant que les températures relevées restent dans le bon intervalle, 
# votre programme devra 
# écrire le texte « Rien à signaler », 
# mais dès que la température n'est pas bonne 
# il doit écrire le texte « Alerte !! » 
# et s'arrêter.

nbTotalMesures = int(input())
minTemp = int(input())
maxTemp = int(input())
nbMesures = 0

while (nbTotalMesures != nbMesures):
    temp = int(input())
    if (minTemp <= temp <= maxTemp):
        print("Rien à signaler")
        nbMesures = nbMesures + 1 
    else: 
        print("Alerte !!")
        break

#Correction :
nbMesures = int(input())
tempMin = int(input())
tempMax = int(input())
numMesure = 0
tempValide = True
while numMesure < nbMesures and tempValide:
   température = int(input())
   tempValide = (tempMin <= température and température <= tempMax)
   if tempValide:
      print("Rien à signaler")
   else:
      print("Alerte !!")
   numMesure = numMesure + 1