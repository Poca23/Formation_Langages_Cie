#Les élèves du village ayant très souvent des punitions, 
# ils aimeraient pouvoir venir les imprimer facilement sans 
# que vous soyez là à chaque fois. Il leur suffirait d'indiquer 
# le nombre de lignes voulu et le robot imprimerait tout seul la punition !

#Ce que doit faire votre programme :
#Votre programme doit lire un entier, 
# le nombre de lignes souhaité, 
# et écrira autant de fois que demandé la phrase « Je dois suivre en cours ».

nbreLigneDemandee = int(3)
for loop in range(nbreLigneDemandee):
    print("Je dois suivre en cours")
    
#Resulat : On a bien trois lignes de punitions 
# qui se répètent comme pour l'exemple.

nbreLigneDemandee = int(input())
for loop in range(nbreLigneDemandee):
    print("Je dois suivre en cours")