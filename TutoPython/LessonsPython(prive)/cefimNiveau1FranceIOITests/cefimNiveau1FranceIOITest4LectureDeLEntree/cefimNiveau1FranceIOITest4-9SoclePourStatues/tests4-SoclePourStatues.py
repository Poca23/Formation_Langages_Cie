#Les habitants d'Algoréa aiment bien ériger des statues et les poser 
#sur des socles majestueux. Selon les dimensions de la statue, 
#le socle doit être plus ou moins haut et offrir une surface plus ou moins 
#grande pour y poser la statue. Cependant, les constructeurs de statues ont 
#souvent du mal à estimer la quantité de béton nécessaire à la construction de chaque socle. 
#Vous souhaitez écrire un programme pour les aider.

#Ce que doit faire votre programme :
#Voici un exemple de socle :
#https://data.france-ioi.org/Task/cd03d2d9846da4acceaa4e13e1e19084/schema.png
#Un socle est ainsi constitué d'étages, chaque étage ayant une hauteur égale à 
#une unité et une base carrée. Le côté des carrés diminue de une unité à chaque étage.

#Votre programme doit lire deux entiers, représentant respectivement la largeur du socle 
#au niveau du sol et la largeur du socle au niveau de la face supérieure du socle. 
#Il doit ensuite calculer et afficher le volume du socle.

#Exemple :
# input:
# 7
# 3
# output:
# 135

# COMMENTS
# Le volume du premier étage est 7 × 7 = 49, le volume du second est 6 × 6 = 36, etc. 
# et le volume du dernier étage est 3 × 3 = 9. 
# Le volume total est donc : 7 × 7 + 6 × 6 + 5 × 5 + 4 × 4 + 3 × 3 = 135.

largeurSocleSol = int(input())
largeurSocleSuperieur = int(input())
volumeTotalSocle = 0

for largeurEtage in range(largeurSocleSuperieur, largeurSocleSol + 1 ):
    volumeEtage = 1 * largeurEtage * largeurEtage
    volumeTotalSocle = volumeEtage + volumeTotalSocle

print(volumeTotalSocle)