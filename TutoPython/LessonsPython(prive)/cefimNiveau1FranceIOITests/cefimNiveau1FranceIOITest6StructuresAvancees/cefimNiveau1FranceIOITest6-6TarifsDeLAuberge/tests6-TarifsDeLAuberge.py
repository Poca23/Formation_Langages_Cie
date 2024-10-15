# L'auberge dans laquelle vous vous arrêtez pour la nuit adapte ses prix 
# en fonction de l'âge du client et du poids de ses bagages. 
# Les règles ne vous étant pas très claires, vous décidez d'écrire un petit programme 
# qui vous permettra facilement, à vous et à vos compagnons de voyage, de connaître le prix d'une nuit.

# Ce que doit faire votre programme :
# Une chambre ne coûte rien si on a 60 ans (l'âge de l'aubergiste !) 
# et 5 écus si on a strictement moins de 10 ans. 
# Pour les autres personnes c'est 30 écus 
# plus un supplément de 10 écus si on a au moins 20 kilos de bagages.

# Votre programme doit lire deux entiers, l'âge et le poids des bagages de la personne 
# et doit afficher le prix, sous la forme d'un entier.

# Exemple
# entrée :

# 22
# 25
# sortie :

# 40

age = int(input())
pdBagage = int(input())

if (age == 60):
    print(0)
elif (age < 10):
    print(5)
else:
    if (pdBagage >= 20):
        print(40)
    else :
        print(30)

#Correction
age = int(input())
poids = int(input())
if age < 10:
   print(5)
else:
   if age == 60:
      print(0)
   else:
      if poids >= 20:
         print(40)
      else:
         print(30)