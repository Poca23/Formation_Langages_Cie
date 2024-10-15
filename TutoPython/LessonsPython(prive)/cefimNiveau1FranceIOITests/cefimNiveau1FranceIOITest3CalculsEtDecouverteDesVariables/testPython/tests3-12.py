# Construire une pyramide de la base au sommet
# base : 17 * 17 * 17
# Calculer le nombre total de petis carrés pour construire la pyramide
# Afficher le résultat du nombre total de petits carrés

nbreCubes = 0
largeurArete = 1

for loop in range(9):
   nbreCubes = nbreCubes + largeurArete * largeurArete * largeurArete
   largeurArete  = largeurArete  +2
print(nbreCubes)