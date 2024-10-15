# Un espion a été démasqué dans la ville où vous vous trouvez. 
# Son interrogatoire n'a pas été très fructueux : 
# la seule chose que vous savez, c'est qu'il espionnait les savants de l'université, 
# une puissance étrangère étant intéressée par leurs recherches. 
# Vous vous rendez donc à l'université pour discuter avec les chercheurs mais à peine arrivé, 
# vous êtes recruté comme assistant par le laboratoire d'étude du comportement humain.

# Celui-ci réalise une expérience consistant à demander à plusieurs personnes 
# de placer chacune un jeton sur une table contenant des zones de différentes couleurs. 
# Les chercheurs souhaitent ainsi étudier si le choix de la zone où une personne place son jeton est lié à la couleur des vêtements qu'elle porte.

# Ce que doit faire votre programme :
# Sur une table est placée une feuille de papier rectangulaire de 90 cm de large et 70 cm de haut, 
# composée de zones de différentes couleurs, comme le décrit la figure ci-dessous. 
# Un certain nombre de personnes placent l'une après l'autre un jeton où elles le souhaitent sur la table, 
# à l'exception des frontières entre les différentes zones.


# On vous donne en entrée le nombre de jetons qui ont été déposés, 
# puis, pour chaque jeton, ses coordonnées sur la feuille par rapport à l'origine en haut à gauche, 
# sous la forme d'une abscisse et d'une ordonnée entre −1 000 et 1 000.

# Votre programme devra qualifier chaque jeton avec l'un des textes suivants, en fonction de la couleur sur laquelle il se trouve :

# « En dehors de la feuille »
# « Dans une zone jaune »
# « Dans une zone bleue »
# « Dans une zone rouge »
# Essayez d'écrire votre programme de sorte qu'il y ait au maximum une condition par possibilité de texte affiché.

# Exemple
# entrée :

# 4
# 16
# 12
# 30
# 22
# 64
# 62
# -5
# 86
# sortie :

# Dans une zone bleue
# Dans une zone jaune
# Dans une zone rouge
# En dehors de la feuille
# Commentaires
# Dans l'exemple, on a 4 jetons, de coordonnées (16 ; 12), (30 ; 22), (64 ; 62) et (-5 ; 86).

nbJetons = int(input())

for loop in range(nbJetons): 
   xJeton = int(input())
   yJeton = int(input())

   if (xJeton < 0 or yJeton < 0 or xJeton > 90 or yJeton > 70):
      print("En dehors de la feuille")
   else:
        if((xJeton >= 10 and xJeton <= 85 and yJeton >= 10 and yJeton <= 55) and not( 25 <= xJeton and xJeton <= 50 
                                                                                     and 20 <= yJeton and yJeton <= 45) ):
            print("Dans une zone bleue")
        elif(((xJeton >= 15 and xJeton <= 45) or (xJeton >= 60 and xJeton <= 85)) and (yJeton >= 60 and yJeton <= 70)):
            print("Dans une zone rouge")
        else:
            print("Dans une zone jaune")      

#Correction :
nbJetons = int(input())
for loop in range(nbJetons):
   x = int(input())
   y = int(input())
   if x < 0 or x > 90 or y < 0 or y > 70:
      print("En dehors de la feuille")
   elif y > 60 and ((x > 15 and x < 45) or (x > 60 and x < 85)):
      print("Dans une zone rouge")
   elif x > 10 and x < 85 and y > 10 and y < 55 and not(x > 25 and x < 50 and y > 20 and y < 45):
      print("Dans une zone bleue")
   else:
      print("Dans une zone jaune")