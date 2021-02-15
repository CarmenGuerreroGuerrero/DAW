print("Ejercicio 01.05. Escribir un programa que imprima todos los números pares entre dos números que se le pidan al usuario.")

n1=int(input("Escribe un número: "))
n2=int(input("Escribe otro número: "))
print("Los números pares que hay entre ",n1," y ",n2," son: ")
for nPares in range(n1,n2+1):
    if nPares%2==0:
        print(nPares)