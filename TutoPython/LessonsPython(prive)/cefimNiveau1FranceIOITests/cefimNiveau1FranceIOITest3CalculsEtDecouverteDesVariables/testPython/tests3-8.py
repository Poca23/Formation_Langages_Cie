# Décompter de 100 jusqu'à 0
# Afficher "Décollage !" à la fin

nombre = 100

print(nombre, end = " ")
print()
for loop in range(100):
   nombre = nombre - 1
   print(nombre, end = " ")
   print()
print("Décollage !")