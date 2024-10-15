# Le long de la route sur laquelle vous marchez se trouvent des bornes. 
# Sur chaque borne est écrit le nombre de kilomètres séparant la position 
# actuelle du bout de la route. Si la borne numéro zéro se trouve derrière vous, 
# alors les numéros augmentent au fur et à mesure que vous avancez. 
# Au contraire, si la borne zéro se trouve devant vous, alors les numéros diminuent 
# au fur et à mesure que vous avancez.

# Vous avez noté le numéro de la borne de laquelle vous êtes parti(e) ce matin, 
# ainsi que le numéro de la borne à laquelle vous êtes arrivé(e) ce soir. 
# Vous souhaitez calculer la distance que vous avez parcourue dans la journée.

# Ce que doit faire votre programme :
# Votre programme doit lire deux entiers, 
# correspondant à deux numéros de bornes kilométriques, 
# et il doit afficher la distance séparant ces deux bornes. 
# Notez que le résultat doit être un nombre positif ou nul.

# Exemples
# Exemple 1
# entrée :

# 152
# 189
# sortie :

# 37

borneDepart = int(input())
borneArrivee = int(input())
distanceParcourue = borneArrivee - borneDepart

if distanceParcourue < 0:
    distanceParcourue = -distanceParcourue
print(distanceParcourue)
    
#Exemple :

borneDepart = int(614)
borneArrivee = int(786)
distanceParcourue = borneArrivee - borneDepart

if distanceParcourue < 0:
    distanceParcourue = -distanceParcourue
print(distanceParcourue)
