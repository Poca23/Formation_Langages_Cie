# Les villageois font pousser dans leurs champs carrés un étrange légume géant :
# le Moutab. 
# Les anciens vous ont dit que, d'après leurs estimations, 
# le rendement de cette année serait de 23 kg de Moutab par mètre carré de culture. 
# Vous voudriez écrire un programme permettant aux villageois de prédire la quantité 
# de légume qu'ils peuvent espérer récolter dans chacun de leurs champs.

#Ce que doit faire votre programme :
#Votre programme doit lire un entier, 
# qui représente la longueur du côté d'un champ carré en mètres.
# Il doit ensuite afficher la masse que l'on pourra récolter de 
# ce champ si l'on suppose que la production sera de 23 kg par mètre carré.

#rendement = 23kg de moutab/m² de culture.
#Ecrire un programme pour prédire la quantité de légumes récoltés dans chacun de leurs champs.

#Le progrmamme doit :
#Lire un entier = longueur du côté d'un champs carré en mètres.
#Afficher la masse récoltée de ce champs si la prodfuction est de 23kg/m².

#Exemple :
#Dans l'exemple, l'entrée contient l'entier 10 : 
# l'utilisateur du programme souhaite donc obtenir 
# la masse produite par un champ de côté 10 m. 
# Le champ a une aire de 10 × 10 = 100 m² : 
# la masse totale qu'on peut récolter est donc 100 × 23 = 2 300.
#Pour l'entrée 10, la sortie est donc 2300.

longueurCote = 3
surface = longueurCote * longueurCote
production = 23 * surface

print(production)

#Correction :
longueur = int(input())
print(longueur * longueur * 23)