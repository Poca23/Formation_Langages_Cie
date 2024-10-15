# Au cours de votre périple, vous traversez de nombreux lieux habités. 
# Pour chacun d'entre eux, vous notez soigneusement sa population. 
# Après quelques semaines de voyage, vous avez vraiment l'impression qu'il y beaucoup de villages et très peu de villes.

# Ce que doit faire votre programme :
# On vous donne le nombre d'habitants d'un certain nombre de lieux que vous visitez. 
# Une ville étant un lieu dont la population est strictement supérieure à 10 000 habitants, 
# déterminez combien de lieux sont des villes.

# Votre programme doit lire un entier : le nombre de lieux. 
# Il doit ensuite lire, pour chaque lieu, un entier donnant le nombre de gens qui y habitent. 
# Votre programme doit alors afficher le nombre de villes.

# Exemple
# entrée :

# 6
# 1000
# 5000
# 15000
# 4780
# 0
# 23590
# sortie :

# 2

nbLieux = int(input())

nbVille = 0

for loop in range(nbLieux):
    nbGens = int(input())
    if nbGens > 10000 :
        nbVille = nbVille + 1
    else :
        nbGens <= 10000
        nbVille = nbVille + 0  
print(nbVille)            
