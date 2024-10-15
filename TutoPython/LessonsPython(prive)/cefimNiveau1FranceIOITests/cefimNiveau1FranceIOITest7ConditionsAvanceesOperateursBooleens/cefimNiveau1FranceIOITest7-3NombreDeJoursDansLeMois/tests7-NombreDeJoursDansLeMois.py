# Les soldats de la garnison de la ville sont payés à la journée et pas au mois, 
# ce qui fait que leur salaire n'est pas le même selon le mois. 
# Le trésorier étant malade et les soldats voulant être payés vous vous proposez pour le remplacer. 
# Certains soldats revenant de mission à l'extérieur, ils doivent recevoir leur paye pour les mois précédents également. 
# Afin de ne pas faire d'erreur, vous décidez d'écrire un programme pour vous aider.

# Ce que doit faire votre programme :
# Écrivez un programme qui lit un numéro de mois algoréen, 
# et affiche le nombre de jours de celui-ci. 
# Les Algoréens disposent de leur propre calendrier. 
# Voici les informations dont vous avez besoin :

# Numéro du mois	Nombre de jours
# 1	                30
# 2	                30
# 3	                30
# 4	                31
# 5	                31
# 6	                31
# 7	                30
# 8	                30
# 9	                30
# 10	            31
# 11	            29

# Exemple
# entrée :

# 6
# sortie :

# 31

numMois = int(input())

if ((1 <= numMois <= 3) or (7 <= numMois <= 9)):
    nbJours = 30
    
if  ((4 <= numMois <= 6) or (numMois == 10)):
    nbJours = 31
    
if (numMois == 11): 
    nbJours = 29

print(nbJours)

#Correction :
numero = int(input())
if numero == 11:
   print(29)
else:
   if ( (4 <= numero) and (numero <= 6) ) or (numero == 10):
      print(31)
   else:
      print(30)