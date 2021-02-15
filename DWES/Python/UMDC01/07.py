print("Ejercicio 01.07. Escribir un programa que tome una cantidad m de valores ingresados por el usuario, a cada uno le calcule el factorial e imprima el resultado junto con el número de orden correspondiente.")

numero = int(input("Escribe un numero: "))

x = 1
for n in range(numero):
	x = x * (n + 1)
	print ("El factorial de " + str(n + 1) + " es " + str(x))