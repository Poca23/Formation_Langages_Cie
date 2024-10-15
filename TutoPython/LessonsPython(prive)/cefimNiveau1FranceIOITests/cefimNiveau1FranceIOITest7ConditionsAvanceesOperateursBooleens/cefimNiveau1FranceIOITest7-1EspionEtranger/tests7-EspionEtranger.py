# Le gouverneur de la ville vous a convoqué dans son bureau pour une affaire d'une extrême importance. 
# En effet, un espion étranger s'est introduit dans la ville et il faut absolument le démasquer. 
# Heureusement, grâce à des informateurs grassement payés, on sait à quelques jours près 
# à quelle date l'espion est arrivé. 
# Il suffira donc de regarder les registres des entrées de la ville puis d'aller 
# interroger toutes les personnes correspondantes.

# Pour avoir une idée de l'ampleur de la tâche, 
# le roi vous a demandé de calculer le nombre de personnes qu'il faudra interroger.

# Ce que doit faire votre programme :
# On vous donne un intervalle de temps pendant lequel on sait qu'un espion est arrivé, 
# puis la date d'arrivée d'un certain nombre de personnes. 
# Déterminez combien de ces personnes peuvent être cet espion.

# Votre programme doit d'abord lire deux entiers : 
# la date de début et la date de fin de l'intervalle pendant lequel on sait que l'espion est arrivé en ville. 
# Il doit ensuite lire un entier nbEntrées, 
# le nombre total de personnes entrées dans la ville, 
# puis les nbEntrées nombres suivants qui représentent les dates d'entrée (non triées) des différentes personnes.

# Votre programme doit afficher le nombre de personnes entrées entre les deux dates données, incluses.

# Exemple
# entrée :

# 6
# 10
# 5
# 7
# 11
# 8
# 3
# 6
# sortie :

# 3

dateDebut = int(input())
dateFin = int(input())
nbEntrees = int(input())

nbSuspects = 0

for loop in range(nbEntrees):
    dateEntree = int(input())
    
    if (dateDebut <= dateEntree <= dateFin) :
        nbSuspects = nbSuspects + 1
print(nbSuspects)

#Correction :
dateDébut = int(input())
dateFin = int(input())
nbEntrées = int(input())
nbPersonnes = 0
for loop in range(nbEntrées):
   date = int(input())
   if dateDébut <= date and date <= dateFin:
      nbPersonnes = nbPersonnes + 1
print(nbPersonnes)