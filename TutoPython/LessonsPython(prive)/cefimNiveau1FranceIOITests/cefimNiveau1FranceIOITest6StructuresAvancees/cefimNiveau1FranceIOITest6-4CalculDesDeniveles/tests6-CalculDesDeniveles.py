# Aujourd'hui c'est l'étape de montagne et vous allez devoir franchir plusieurs cols. 
# Vous allez passer votre temps à monter, descendre, remonter, redescendre, etc... 
# Vous décidez de noter les différentes variations d'altitudes, 
# afin de pouvoir calculer à la fin de la journée quelle est la dénivelée totale 
# que vous avez montée ainsi que la dénivelée totale que vous avez descendue 
# (les deux valeurs peuvent être différentes car vous ne retournez pas à votre point de départ).

# Ce que doit faire votre programme :
# Votre programme lira d'abord un entier représentant le nombre de montées et descentes que vous avez réalisées. 
# Pour chaque montée ou descente, il faut ensuite lire un entier représentant la variation d'altitude, 
# cet entier étant strictement positif dans le cas d'une montée et strictement négatif dans le cas d'une descente 
# (il n'y a rien à compter pour les tronçons qui sont bien à plat). 
# Votre programme devra afficher l'altitude totale montée puis l'altitude totale descendue 
# (ces deux nombres sont positifs).

# Exemple
# entrée :

# 5
# 4
# 7
# -6
# -3
# 2
# sortie :

# 13
# 9

nbDeniveles = int(input())
monteeTotale = 0
descenteTotale = 0

for loop in range(nbDeniveles):
    variation = int(input())
    if variation > 0 :
        monteeTotale = variation + monteeTotale
    else :
        variation < 0
        descenteTotale = -variation + descenteTotale
print(monteeTotale)
print(descenteTotale)