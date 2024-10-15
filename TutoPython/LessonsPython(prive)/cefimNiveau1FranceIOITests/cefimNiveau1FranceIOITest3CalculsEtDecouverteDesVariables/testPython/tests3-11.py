# module non téléchargé pour le robot
# ramasser les 10 anneaux
# revenir à la case de départ pour déposer l'anneau après en avoir rammaser un

from robot import *
anneau = 1

for loop in range(10):
   for loop in range(anneau):
      droite()
   ramasser()
   for loop in range(anneau):
      gauche()  
   deposer()
   anneau = anneau + 1
