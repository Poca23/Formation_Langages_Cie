# Dans votre petit carnet de voyage, vous avez noté la distance que vous avez parcourue chaque jour. 
# Aujourd'hui, vous êtes particulièrement en forme et vous décidez donc de marcher plus que les jours précédents. 
# Vous souhaitez utiliser un programme pour déterminer quel est votre record pour l'instant.

# Ce que doit faire votre programme :
# Votre programme doit d'abord lire un entier strictement positif, le nombre de jours de marche effectués jusqu'à présent. 
# Il doit ensuite lire, pour chaque jour, la distance parcourue ce jour-là. 
# Il doit alors afficher la distance maximale parcourue en une journée.

# Exemple
# entrée :

# 6
# 36
# 14
# 38
# 28
# 29
# 31
# sortie :

# 38

jrMarches = int(input())
distMax = 0

for loop in range(jrMarches):
    distMarchees = int(input())
    if (distMarchees > distMax) :
        distMax = distMarchees
print(distMax)