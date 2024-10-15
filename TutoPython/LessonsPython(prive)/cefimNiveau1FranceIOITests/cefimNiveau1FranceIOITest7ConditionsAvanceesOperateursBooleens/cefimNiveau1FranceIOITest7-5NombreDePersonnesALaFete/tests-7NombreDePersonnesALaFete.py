# Le gouverneur a organisé une petite fête à laquelle tous les notables étaient invités. 
# Il souhaiterait à présent faire réaliser une petite affiche vantant le succès de la fête 
# et indiquant en particulier le nombre de personnes présentes au moment le plus intense de la fête.

# Ce que doit faire votre programme :
# On vous décrit les arrivées et départs des participants d'une fête, 
# et votre programme doit afficher le nombre maximum de personnes qui ont été présentes au même moment. 
# Chacun des invités est identifié par un numéro.

# Le premier entier à lire est nbPersonnes : le nombre total de personnes qui se sont rendues à la fête. 
# Ensuite, il y a 2 × nbPersonnes entiers à lire, dans l'ordre chronologique des arrivées et départs. 
# Si l'entier est positif, c'est que la personne de numéro correspondant vient d'arriver, 
# s'il est négatif, elle vient de partir. Une fois qu'une personne est partie, elle ne revient pas.

# Votre programme doit déterminer puis afficher le nombre maximum de personnes qui étaient là simultanément.

# Exemple
# entrée :

# 5
# 1
# 2
# -1
# 3
# 4
# -2
# -4
# 5
# -3
# -5
# sortie :

# 3

nbPersonnes = int(input())
simultanee = 0
maxNbPersonneSimultanee = 0

for i in range(nbPersonnes * 2):
    numero = int(input())
    if (numero > 0):
        simultanee = simultanee + 1
    else:
        maxNbPersonneSimultanee = max(maxNbPersonneSimultanee,simultanee)
        simultanee = simultanee - 1

print(maxNbPersonneSimultanee)

#Correction :
nbPersonnes = int(input())
nbMax = 0
nbActuel = 0
for loop in range(nbPersonnes * 2):
   numero = int(input())
   if numero > 0:
      nbActuel = nbActuel + 1
   else:
      nbActuel = nbActuel - 1
   if nbActuel > nbMax:
      nbMax = nbActuel
print(nbMax)

#Variante :
nbPersonnes = int(input())
nbMax = 0
nbActuel = 0
for loop in range(nbPersonnes * 2):
   numero = int(input())
   if numero > 0:
      nbActuel = nbActuel + 1
      if nbActuel > nbMax:
         nbMax = nbActuel
   else:
      nbActuel = nbActuel - 1
print(nbMax)