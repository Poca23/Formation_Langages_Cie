# Vous arrivez devant un pont que vous devez absolument emprunter pour arriver avant la nuit au village 
# situé de l'autre côté de la rivière. 
# Cependant, la traversée du pont n'est pas gratuite et le tarif dépend de votre chance au jeu. 
# En effet, le gardien vous demande de lancer deux dés et le prix dépendra des valeurs que vous obtiendrez. 
# Vous décidez d'écrire un programme pour vérifier qu'il applique bien le bon tarif.

# Ce que doit faire votre programme :
# Votre programme doit lire deux entiers, compris entre 1 et 6, la valeur de chaque dé. 
# Si la somme est supérieure ou égale à 10, alors vous devez payer une taxe spéciale (36 pièces). 
# Sinon, vous payez deux fois la somme des valeurs des deux dés. 
# Votre programme devra afficher selon le cas le texte « Taxe spéciale ! » 
# ou bien « Taxe régulière », 
# puis la somme à payer (sans indiquer l'unité).

# Exemples
# Exemple 1
# entrée :

# 5
# 6
# sortie :

# Taxe spéciale !
# 36

lance1 = int(input())
lance2 = int(input())

somme = lance1 +lance2

if somme >= 10:
    print("Taxe spéciale !")
    print(36)
else :
    print("Taxe régulière")
    print(somme * 2)