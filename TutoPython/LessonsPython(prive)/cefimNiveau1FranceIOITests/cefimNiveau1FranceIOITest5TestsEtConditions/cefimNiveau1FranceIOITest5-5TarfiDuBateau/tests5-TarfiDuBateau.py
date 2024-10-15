# Vous venez d'apprendre qu'un concert de rock va se dérouler ce soir dans la ville située de l'autre côté du lac. 
# Vous avez tout juste le temps d'y arriver en prenant le bateau. 
# Cependant, vous n'êtes pas le seul à vouloir y aller, 
# et il y a une longue queue pour acheter les tickets pour la traversée.

# Comme il n'y a qu'une seule personne qui s'occupe à la fois de vendre les tickets et 
# d'aider les gens à monter sur le bateau, vous vous rendez vite compte que vous 
# allez certainement arriver en retard. 
# La vente des tickets est particulièrement lente car il faut demander aux gens 
# leur âge pour savoir s'ils doivent payer plein tarif ou bien tarif réduit.

# Vous proposez que votre robot s'occupe de la vente des billets et que 
# la personne responsable du bateau s'occupe uniquement d'aider les gens à monter sur le bateau. 
# Il va donc vous falloir programmer votre robot assez vite pour arriver à temps au concert.

# Ce que doit faire votre programme :
# Votre programme doit lire l'âge d'une personne et 
# afficher soit « Tarif réduit » si cette personne a strictement moins de 21 ans, 
# soit « Tarif plein » dans le cas contraire.

# Exemples
# Exemple 1
# entrée :

# 22
# sortie :

# Tarif plein
# Exemple 2
# entrée :

# 16
# sortie :

# Tarif réduit

age = int(input())

if age < 21 :
    print("Tarif réduit")
elif age >= 21 :
    print("Tarif plein")
