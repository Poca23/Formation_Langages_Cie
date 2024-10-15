# Afin de pouvoir mieux combattre les différentes épidémies, 
# parfois très graves, qui se développent régulièrement dans la région, 
# le département de médecine de l'université a lancé une grande étude. 
# En particulier, les chercheurs s'intéressent à la vitesse de propagation d'une épidémie 
# et donc à la vitesse à laquelle des mesures sanitaires doivent êtres mises en place.

# Ce que doit faire votre programme :
# Votre programme doit d'abord lire un entier, la population totale de la ville. 
# Sachant qu'une personne était malade au jour 1 
# et que chaque malade contamine deux nouvelles personnes le jour suivant (et chacun des jours qui suivent), 
# vous devez calculer à partir de quel jour toute la population de la ville sera malade.

# Exemples
# Exemple 1
# entrée :

# 3
# sortie :

# 2
# Exemple 2
# entrée :

# 10
# sortie :

# 4
# Commentaires
# On a 1 malade le premier jour, donc 2 nouveaux malades le second jour, soit un total de 3 malades. On a donc 6 nouveaux malades au troisième jour, soit un total de 9 malades. On a donc 18 nouveaux malades au quatrième jour, soit…

popTotVille = int(input())
malade = 1
jour = 1

while (malade < popTotVille):
    malade = malade + malade *2
    jour = jour + 1
print(jour)

#Correction :
populationVille = int(input())
numJour = 1
nbMalades = 1
while nbMalades < populationVille:
   numJour = numJour + 1
   nbMalades = nbMalades * 3
print(numJour)