# Vous arrivez dans un village le jour du marché, 
# de nombreux marchands vendent la spécialité locale, 
# de délicieuses petites galettes. 
# Elles ont toutes l'air d'être identiques, 
# 
# donc vous décidez d'acheter les moins chères.

# Ce que doit faire votre programme :
# Votre programme doit lire un entier nbMarchands (non nul) puis les nbMarchands entiers suivants, 
# qui indiquent le prix des galettes chez chaque marchand, de la position 1 à la position nbMarchands. 
# Votre programme devra ensuite afficher la position du plus petit de ces prix. 
# En cas d'égalité entre deux prix, on prendra la position la plus grande. 
# Tous les prix et positions sont positifs et ne dépassent pas 1 million.

# Exemple
# entrée :

# 6
# 12
# 11
# 9
# 11
# 9
# 15
# sortie :

# 5
# Commentaires
# Parmi ces 6 marchands, c'est le 5ème qui vend ses galettes le moins cher, 
# à 9 euros la galette. 
# Il est à égalité avec le 3e marchand, 
# mais on préfère le 5e qui est le plus près du bout de la rue.

nbMarchands = int(input())
prixMin = 1000000
prixMax = 0
position = 0

for posMarchand in range(1, nbMarchands + 1):
    prixGalettes = int(input())
    if (prixGalettes <= prixMin):
        prixMin = prixGalettes
        position =  posMarchand
    if (prixGalettes > prixMax):
        prixMax = prixGalettes
        
print(position)

#Correction :
nbMarchands = int(input())
minPrix = 1000 * 1000
posMinPrix = -1
pos = 1
for loop in range(nbMarchands):
   prix = int(input())
   if prix <= minPrix:
      minPrix = prix
      posMinPrix = pos
   pos = pos + 1
print(posMinPrix)