print("Ejercicio 01.03. Escribir un programa que convierta un valor dado en grados Fahrenheit a grados Celsius. Recordar que la fórmula para la conversión es: C = (f - 32)*5/9.")

f=float(input("Introduce los grados Fahrenheit que se desea pasar a Celsius: "))

def deFaC (f):
    return (f - 32)*5/9

print(f,"Fº son ",deFaC(f)," Cº.")