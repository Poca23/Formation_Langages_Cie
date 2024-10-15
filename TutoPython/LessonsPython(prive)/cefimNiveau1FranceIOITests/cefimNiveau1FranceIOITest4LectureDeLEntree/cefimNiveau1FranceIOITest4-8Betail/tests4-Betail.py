#Le village compte 20 fermiers, et chaque fermier élève un certain nombre de Karvas
#(des ruminants qui ressemblent beaucoup à nos vaches terriennes). 
#Pour s'assurer qu'il n'y a pas de risque de famine en cas de mauvaise récolte, 
#les habitants veulent régulièrement calculer le nombre total de Karvas du village.
#Cependant, pour une raison qui vous échappe, les fermiers gardent jalousement secret 
#le nombre de bêtes qu'ils possèdent.

#Vous proposez alors la solution suivante : 
#les fermiers viendront chacun leur tour donner à votre robot le nombre de
#Karvas qu'ils possèdent. Votre robot pourra alors afficher le nombre total 
#de Karvas du village, puis effacer les informations secrètes qui lui auront été fournies.

#Ce que doit faire votre programme :
#Votre programme doit lire 20 entiers puis afficher la somme de tous ces entiers.

#Exemple :
#input:
# 1
# 2
# 3
# 4
# 5
# 6
# 7
# 8
# 9
# 10
# 10
# 9
# 8
# 7
# 6
# 5
# 4
# 3
# 2
# 1
#output:
# 110

somme = 0

for loop in range(20):
    somme = somme + int(input())
print(somme)