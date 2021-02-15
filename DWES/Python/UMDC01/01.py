print("Ejercicio 01.01. Ciclos definidos")

print("a) Escribir un ciclo definido para imprimir por pantalla todos los números entre 10 y 20.")
#Se crea un bucle for donde n tendrá un rango entre los números deseados, en este caso 10 y 21, ya que si se pone 20 coge hasta el 19
for n in range(10,21):
    print (n)

print("b) Escribir un ciclo definido que salude por pantalla a sus cinco mejores amigos/as.")
#Se crea un bucle for donde amigos es un array de nombre de mis cinco mejores amigo y luego se imprime por pantalla "hola "+el nombre de cada amigo
for amigos in ["Elena","Daniel","Lorena","Juan","María José"]:
    print("Hola "+amigos)

print("c) Escribir un programa que use un ciclo definido con rango numérico, que pregunte los nombres de sus cinco mejores amigos/as, y los salude.")
#Se crea un bucle for donde n tendrá un rango de 5, dentro se crea la variable nombre, que obtendrá su valor por un input, y luego mostrará por pantalla Hola + el nombre introducido por parámetro.
for n in range(5):
    nombre=input("Dí el nombre de uno de tus mejores amigos: ")
    print("Hola "+nombre)

print("d) Escribir un programa que use un ciclo definido con rango numérico, que averigüe a cuántos amigos quieren saludar, les pregunte los nombres de esos amigos/as, y los salude.")
#Atención! Cuando se pide por parametro con un input, te guarda la variable en string, por lo que si queremos trabajar con numeros, hay que pasar ese string a int
numeroAmigos = input("¿Cuántos amigos tienes?: ")
nAmigos= int(numeroAmigos)

for n in range(nAmigos):
    nombre = input("Introduce tu amigo: ")
    print("Hola", nombre)