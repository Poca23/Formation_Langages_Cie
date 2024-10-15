# Lors du concours général agricole, l'épreuve reine, celle que tout fermier rêve de remporter,
# est celle du plus beau Karva (l'équivalent de notre taureau). La compétition est basée sur des règles strictes : 
# chaque animal reçoit une note en fonction de ses caractéristiques et celui qui a reçu 
# la plus grande note est déclaré champion. Vous souhaiteriez connaître les résultats avant tout le monde ; 
# aussi, vous décidez d'écrire un programme qui vous donnera la note de chacun des Karvas en compétition.

#Ce que doit faire votre programme :
#Votre programme doit d'abord lire le nombre de Karvas en compétition. 
# 
# Ensuite, pour chaque Karva, il doit :
#lire 4 entiers : son poids, son âge, la longueur de ses cornes et la hauteur au garrot ;
#afficher sa note, sachant qu'elle s'obtient en multipliant la longueur des cornes par la hauteur au garrot, 
# valeur à laquelle on ajoute le poids.

nbKarva = int(input())

for loop in range(nbKarva):
    poids = int(input())
    age = int(input())
    lgrCornes = int(input())
    htrGarrot = int(input())
    print(lgrCornes * htrGarrot + poids)
    
#Correction :
# nbKarvas = int(input())
# for loop in range(nbKarvas):
#    poids = int(input())
#    âge = int(input())
#    longueurCornes = int(input())
#    hauteurAuGarrot = int(input())
#    print(longueurCornes * hauteurAuGarrot + poids)    

# Notez que la valeur de la variable âge n'est jamais consultée, et que la variable est donc inutile. 
# Nous pourrions donc écrire simplement :

# int(input()) # âge
# ou même :

# input() # âge
# L'écriture que nous employons permet toutefois de comprendre le rôle de cette ligne, plus agréablement qu'avec un commentaire.