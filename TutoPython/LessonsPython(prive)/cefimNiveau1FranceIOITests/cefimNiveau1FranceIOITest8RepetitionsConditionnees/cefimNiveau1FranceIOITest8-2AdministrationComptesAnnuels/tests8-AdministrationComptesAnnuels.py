# Une grande partie du travail de l'administration de l'université, 
# en plus de gérer les enseignants, les étudiants, les cours… 
# est de veiller au bon fonctionnement de l'université 
# et en particulier à ce que les comptes soient bien tenus. 
# En particulier il faut, une fois par an, faire un bilan annuel des dépenses.

# Toutes les dépenses de l'année ont été enregistrées et classées dans une multitude de dossiers 
# et il faut maintenant calculer la somme de toutes ces dépenses. 
# Mais personne ne sait exactement combien de dépenses différentes ont été effectuées durant l'année écoulée !

# Ce que doit faire votre programme :
# Votre programme devra lire une suite d'entiers positifs 
# et afficher leur somme. On ne sait pas combien il y aura d'entiers, 
# mais la suite se termine toujours par la valeur -1 (qui n'est pas une dépense, juste un marqueur de fin).

# Exemples
# Exemple 1
# entrée :

# 1000
# 2000
# 500
# -1
# sortie :

# 3500
# Exemple 2
# entrée :

# -1
# sortie :

# 0

somme = 0
continuer = True

while (continuer):
    depenses = int(input())
    if (depenses == -1):
        continuer = False
    else:
        somme = somme + depenses
print(somme)

#Correction :
sommeDépenses = 0
dépense = int(input())
while dépense != -1:
   sommeDépenses = sommeDépenses + dépense
   dépense = int(input())
print(sommeDépenses)