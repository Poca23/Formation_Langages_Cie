# Un espion était présent à la grande fête organisée la semaine dernière par le gouverneur. 
# Bien qu'on n'ait pas pu l'identifier, 
# on a réussi à intercepter son rapport et à estimer en fonction de ce qu'il a pu voir, 
# à quelle période il a été présent. 
# Sachant pour chaque invité sa date d'arrivée et de départ, 
# on aimerait interroger tous les suspects potentiels. 
# Vous souhaitez savoir combien de suspects il faudra interroger.

# Ce que doit faire votre programme :
# On vous donne une période de temps à étudier, 
# et les dates d'arrivée et de départ d'un certain nombre d'invités d'une fête. 
# Écrivez un programme qui détermine combien d'invités ont été présents à un moment de la période étudiée.

# Votre programme doit d'abord lire deux entiers : 
# la date de début et la date de fin de la période étudiée. 
# L'entier suivant, nbInvites, est le nombre total d'invités. 
# Pour chaque invité, votre programme doit ensuite lire deux entiers : 
# sa date d'arrivée et de départ. 
# Un invité est suspect si la période à laquelle il a été présent intersecte la période étudiée. 
# Votre programme doit afficher le nombre d'invités suspects.

# Exemple
# entrée :

# 8
# 12
# 5
# 4
# 7
# 2
# 11
# 3
# 6
# 1
# 8
# 14
# 19
# sortie :

# 2


tempsDebut = int(input())
tempsFin = int(input())
nbInvites = int(input())

invitesSuspects = 0

for loop in range(nbInvites):
    arriveeInvite = int(input())
    departInvite = int(input())
    pasPresent = (departInvite < tempsDebut or  tempsFin < arriveeInvite)

    if(pasPresent):
        pasPresent = True
    else:
        pasPresent = False
        invitesSuspects = invitesSuspects + 1
print(invitesSuspects)

#Correction :
espionDebut = int(input())
espionFin = int(input())
nbInvites = int(input())
nbSuspects = 0
for loop in range(nbInvites):
   debut = int(input())
   fin = int(input())
   if not( (espionFin < debut) or (fin < espionDebut) ):
      nbSuspects = nbSuspects + 1
print(nbSuspects)