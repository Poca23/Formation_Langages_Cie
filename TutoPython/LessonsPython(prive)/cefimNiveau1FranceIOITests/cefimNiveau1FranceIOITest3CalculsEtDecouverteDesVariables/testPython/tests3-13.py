# Créer une colonne de Pythagore

ligne = 1
for loop in range(20):
    colonne = 1
    for loop in range(20):
        print(ligne * colonne, end = " ")
        colonne = colonne + 1
    print()
    ligne = ligne + 1


