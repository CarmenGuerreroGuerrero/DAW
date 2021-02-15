print("Ejercicio 02: Escribir un programa que le pregunte al usuario una cantidad de euros, una tasa de interés y un número de años y muestre como resultado el monto final a obtener. La fórmula a utilizar es (interés compuesto): Cf = Ci * (1 + i/100) ^ n. Donde Ci es el capital inicial, i es la tasa de interés y n es el número de años a calcular.")

cantidad=float(input("Indique la cantidad de euros: "))
interes=float(input("Indique el tipo de interes: "))
nAños=float(input("Indique un número de años: "))

def formula(Ci, i, n):
    return Ci*(1+i/100)**n

print("Total a pagar: ",formula(cantidad, interes, nAños)," €")