#Une fois par an, tout habitant de plus de 15 ans doit effectuer une randonnée spirituelle, 
# celle-ci pouvant durer plusieurs jours. La durée dépendra du temps nécessaire à chaque 
# personne pour faire le bilan de l'année écoulée. Au cours de cette randonnée, 
# la personne doit répéter encore et encore la même incantation, une fois par seconde. 
# Vous vous demandez combien de fois au total l'incantation aura été répétée, 
# selon la durée de la randonnée.

#Ce que doit faire votre programme :
#Votre programme devra lire un entier : 
# 1/le nombre de jours que dure la randonnée. 
# 2/Ensuite, il devra afficher le nombre de fois que l'incantation est répétée, 
# sachant qu'elle est prononcée une fois par seconde pendant 16 heures par jour 
# (les 8 autres heures, on dort !).

#Exemple :
#input:
#2
#output:
#115200

#COMMENTS
#En 2 jours (le nombre donné en entrée), l'incantation sera répétée 115 200 fois.
#Écrivez à présent un programme qui fonctionne pour n'importe quel nombre de jours.

nbreIncantationUnJour = 1 * 60 * 60 * 16
nbreJourTot = int(input())

print (nbreIncantationUnJour * nbreJourTot)
#Résultat :on remplace input() par 2, on obtient bien 115200 comme pour l'exemple