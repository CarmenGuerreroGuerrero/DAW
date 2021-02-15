print("Ejercicio 01.09. Modificar el programa anterior para que pueda generar fichas de un juego que puede tener números de 0 a n.")
numeros = int(input("Cuantos numeros puede tener tu juego: "))+1

for n in range(numeros):
	for x in range(n+1):
		print (str(n) + " - " + str(x))