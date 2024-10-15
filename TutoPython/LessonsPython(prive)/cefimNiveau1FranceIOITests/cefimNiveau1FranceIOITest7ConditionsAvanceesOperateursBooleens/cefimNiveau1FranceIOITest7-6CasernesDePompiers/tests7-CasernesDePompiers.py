# La ville comprend de nombreuses casernes de pompiers et chacune a sa propre zone d'intervention qui lui est réservée. 
# Cependant en regardant ces zones il vous semble qu'elles ne sont pas très bien choisies car parfois 
# elles se recoupent alors que certains endroits de la ville sont en dehors de toutes les zones 
# et donc ne sont pas protégées par les pompiers. 
# Vous décidez d'aider le maire à mieux organiser l'action des pompiers.

# Ce que doit faire votre programme :
# Votre programme doit lire la description de plusieurs paires de zones rectangulaires, 
# et pour chacune, 
# déterminer si les deux rectangles s'intersectent.

# Vous devez lire un premier entier, le nombre de paires de zones que votre programme devra tester. 
# Ensuite, pour chaque paire possible, 
# deux zones rectangulaires et parallèles aux axes vous sont données l'une après l'autre. Chaque zone est décrite par 4 entiers : son abscisse minimale et maximale puis son ordonnée minimale et maximale.

# Sur cet exemple, la zone du bas est donc décrite par les 4 entiers (1, 6, 1, 5) et l'autre par (4, 9, 3, 8) :


# Pour chaque paire de zones, votre programme doit écrire "OUI" si les zones s'intersectent 
# et "NON" sinon. 
# Si elles ne font que se toucher sur les bords il doit écrire "NON".

nbPairesZones = int(input())

for loop in range(nbPairesZones):
    #1er rectangle
    xMin1 = int(input())
    xMax1 = int(input())
    yMin1 = int(input())
    yMax1 = int(input())

    #2eme rectangle
    xMin2 = int(input())
    xMax2 = int(input())
    yMin2 = int(input())
    yMax2 = int(input())
    if (not(xMax1 <= xMin2 or xMax2 <= xMin1) and not(yMax1 <= yMin2 or yMax2 <= yMin1)):
        print("OUI")
    else:
        print("NON")

#Correction :
nbPaires = int(input())
for loop in range(nbPaires):
   xMin1 = int(input())
   xMax1 = int(input())
   yMin1 = int(input())
   yMax1 = int(input())
   xMin2 = int(input())
   xMax2 = int(input())
   yMin2 = int(input())
   yMax2 = int(input())
   if ( (xMax2 <= xMin1) or (xMax1 <= xMin2) ) or ( (yMax2 <= yMin1) or (yMax1 <= yMin2) ):
      print("NON")
   else:
      print("OUI")