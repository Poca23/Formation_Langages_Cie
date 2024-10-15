# Un festin est organisé pour récompenser tous les gens qui ont participé à la construction 
# d'une nouvelle palissade autour du village. 
# Pour empêcher de rentrer ceux qui sont restés toute la journée à la plage au lieu 
# d'aller couper du bois et de planter des piquets, un code secret a été transmis à tous ceux 
# qui ont le droit d'accéder au festin.

# Cependant, personne ne veut se dévouer pour garder l'entrée de la salle des fêtes et y filtrer les accès.
# Personne sauf… votre robot, qui a tendance à surchauffer dès qu'on lui demande de participer à une discussion mondaine ! 
# Programmez donc votre robot pour qu'il ne laisse passer que les gens qui connaissent le code secret.

# Ce que doit faire votre programme :
# Votre programme doit lire un entier : le code fourni par l'utilisateur. 
# Si ce code correspond au code secret, qui est 64 741, alors le programme devra afficher le texte « Bon festin ! ». 
# Sinon, il devra afficher « Allez-vous en ! ».

# Exemples
# Exemple 1
# entrée :

# 42
# sortie :

# Allez-vous en !

code = int(input())
codeSecret =64741

if code == codeSecret :
    print("Bon festin !")
else :
    print("Allez-vous en !")