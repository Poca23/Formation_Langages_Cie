# Alors que vous traversez une forêt vous ne pouvez vous empêcher d'admirer 
# la végétation autour de vous et notamment les nombreuses espèces d'arbres. 
# Malgré votre intérêt, vous êtes très mauvais botaniste et avez beaucoup de mal à identifier les différents arbres. 
# Une personne que vous croisez vous donne quelques indications et 
# vous décidez d'écrire un programme qui vous donnera le nom de l'arbre en fonction de ses caractéristiques.

# Ce que doit faire votre programme :
# Il existe 4 types d'arbres :

# le "Tinuviel" fait moins de 5 mètres de haut et ses feuilles sont composées de plus de 8 folioles
# le "Calaelen" fait plus de 10 mètres de haut et ses feuilles sont composées de plus 10 folioles
# le "Falarion" fait moins de 8 mètres de haut et ses feuilles sont composées de moins de 5 folioles
# le "Dorthonion" fait plus de 12 mètres de haut et ses feuilles sont composées de moins de 7 folioles
# Votre programme lira deux entiers, la hauteur et le nombre de folioles de l'arbre, et affichera le nom de l'arbre correspondant.
# Toutes les inégalités sont à prendre au sens large, c'est-à-dire que "moins" signifie "moins ou égal" ou et "plus" signifie "plus ou égal".

# Exemples
# Exemple 1
# entrée :

# 12
# 12
# sortie :

# Calaelen
# Exemple 2
# entrée :

# 4
# 9
# sortie :

# Tinuviel

htr = int(input())
nbFolioles = int(input())

if (htr <= 5 and nbFolioles >= 8) :
    print("Tinuviel")
if (htr <= 8  and nbFolioles <= 5):
    print("Falarion")
if (htr >= 10 and nbFolioles >= 10):
    print("Calaelen")
if (htr >= 12  and nbFolioles <= 7):
    print("Dorthonion")
    
#Correction :
hauteur = int(input())
nbFolioles = int(input())
if hauteur < 9:
   if nbFolioles > 6:
      print("Tinuviel")
   else:
      print("Falarion")
else:
   if nbFolioles < 8:
      print("Dorthonion")
   else:
      print("Calaelen")    