print("Ejercicio 01. Escribir dos funciones que permitan calcular:\n-La cantidad de segundos en un tiempo dado en horas, minutos y segundos.\n-La cantidad de horas, minutos y segundos de un tiempo dado en segundos.")
def HoraMinutoXSeg(h,m,s):
    return ((h*60)+m)*60+s

h=2
m=30
s=3
segundos=9003
print("La cantidad de segundos que contiene ",h," horas,",m," minutos y ",s," segundos es: ",HoraMinutoXSeg(h,m,s)," segundos.")


def SegXHoraMinuto(s):
    horas = s//3600
    s = s%3600
    minutos = s//60
    segundos = s%60
    return horas," horas,",minutos," minutos y ",segundos," segundos."

print("La cantidad de horas, minutos y minutos que contiene ",segundos," segundos es: ",SegXHoraMinuto(segundos))
