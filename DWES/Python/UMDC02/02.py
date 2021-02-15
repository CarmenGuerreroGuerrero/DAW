print("Ejercicio 02. Usando las funciones del ejercicio anterior, escribir un programa que lea de teclado dos tiempos expresados en horas, minutos y segundos; las sume y muestre el resultado en horas, minutos y segundos por pantalla.")
def HoraMinutoXSeg(h,m,s):
    return ((h*60)+m)*60+s

def SegXHoraMinuto(s):
    horas = s//3600
    s = s%3600
    minutos = s//60
    segundos = s%60
    return (horas,minutos,segundos)
    
SumaHMS= True
while SumaHMS: 
    h1 = int(input('Introduzca hora:'))
    h2 = int(input('Introduzca hora:'))
    m1 = int(input('Introduzca minuto:'))
    m2 = int(input('Introduzca minuto:'))
    s1 = int(input('Introduzca segundo:'))
    s2 = int(input('Introduzca segundo:'))
    SumaHMS = False
(h, m, s) = SegXHoraMinuto(HoraMinutoXSeg(h1, m1, s1) + HoraMinutoXSeg(h2, m2, s2))
print ("La suma es:",h ,"horas" ,m ,"minutos y" ,s ,"segundos")
