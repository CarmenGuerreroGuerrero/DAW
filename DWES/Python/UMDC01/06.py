print("Ejercicio 01.06. Escribir un programa que reciba un número n por parámetro e imprima los primeros números triangulares, junto con su índice. \nLos números triangulares se obtienen mediante la suma de los números naturales desde 1 hasta n. Es decir, si se piden los primeros 5 números triangulares, el programa debe imprimir: \n1 - 1 \n2 - 3\n3 - 6\n4 - 10\n5 - 15\nNota: hacerlo usando y sin usar la ecuación n ∗ (n + 1) / 2. ¿Cuál realiza más operaciones?")

def triangularEcuacion(n):
    return int(n * (n+1)/2)





num=int(input("Introduce el número de números triangulares que deseas: "))
print("Triangular sin ecuación: ")
triangular = 0
for i in range(1, num+1):
    triangular += i
    print(i,"--",triangular)


print("Triangular con ecuación: ")
for i in range(1, num+1):
    print(i,"--",triangularEcuacion(i))

