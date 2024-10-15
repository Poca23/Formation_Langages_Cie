# L'auberge dans laquelle vous avez prévu de passer la nuit ce soir propose des tarifs 
# très intéressants, pour peu que l'on n'arrive pas trop tard. En effet, 
# plus on arrive tôt moins on devra payer. 
# Vous essayez de construire un programme vous donnant directement le prix à payer 
# en fonction de votre heure d'arrivée.

# Ce que doit faire votre programme :
# Votre programme lira un entier, l'heure d'arrivée, 
# qui sera compris entre 0 et 12 inclus. 
# 0 correspond à midi, 1 à 1h de l'après-midi, etc. et 12 à minuit.

# Le prix de la chambre est de 10 pièces à midi, 
# et augmente de 5 pièces chaque heure après midi. 
# Il est donc de 15 pièces à 13h, etc. 
# Il ne peut cependant pas dépasser 53 pièces.

# Votre programme devra afficher le prix à payer correspondant à l'heure d'arrivée donnée.

# Exemples
# Exemple 1
# entrée :

# 7
# sortie :

# 45
# Exemple 2
# entrée :

# 10
# sortie :

# 53

heureArrivee = int(input())
prixChambre = 10 + (5 * heureArrivee)

if prixChambre > 53 :
    prixChambre = 53
print(prixChambre)