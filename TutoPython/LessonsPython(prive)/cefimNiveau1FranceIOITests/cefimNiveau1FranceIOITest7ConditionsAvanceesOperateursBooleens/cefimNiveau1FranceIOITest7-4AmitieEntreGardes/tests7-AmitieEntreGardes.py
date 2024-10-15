# Comme dans tout métier, certains soldats sont devenus amis, et on peut facilement dire si deux soldats sont amis : 
# si à un moment ils sont de garde en même temps alors ils sont amis, sinon ils ne le sont pas. 
# Afin de développer les relations amicales entre les soldats, le colonel en charge des tours de garde 
# souhaiterait autant que possible mettre en binôme des soldats qui ne sont pas encore amis. 
# Il vous demande votre aide pour déterminer si deux soldats sont amis ou pas.

# Ce que doit faire votre programme :
# Vous devez écrire un programme qui détermine si deux soldats ont été de garde en même temps.

# Votre programme doit lire quatre entiers : 
# la date du début et la date de fin (incluse) du service du premier soldat puis celles du second soldat.

# Si les deux soldats ont, à un moment (même une seule seconde), 
# été de garde en même temps le programme devra écrire "Amis" et sinon "Pas amis".

# Exemples
# Exemple 1
# entrée :

# 2
# 5
# 3
# 6
# sortie :

# Amis

dateDebutSoldat1 = int(input())
dateFinSoldat1 = int(input())

dateDebutSoldat2 = int(input())
dateFinSoldat2 = int(input())

if ((dateDebutSoldat1 <= dateDebutSoldat2 <= dateFinSoldat1) or (dateDebutSoldat2 <= dateDebutSoldat1 <= dateFinSoldat2)):
    print("Amis")
else:
    print("Pas amis")
    
#Correction :
dateDebutPremier = int(input())
dateFinPremier = int(input())
dateDebutSecond = int(input())
dateFinSecond = int(input())
if (dateFinSecond < dateDebutPremier) or (dateFinPremier < dateDebutSecond):
   print("Pas amis")
else:
   print("Amis")