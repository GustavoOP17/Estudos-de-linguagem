from math import hypot
comprimentoOP = float(input("Comprimento do cateto oposto: "))
comprimentoAD  = float(input("Comprimento do cateto adjacente: "))
hipotenusa = hypot(comprimentoOP, comprimentoAD)
print("A hipotenusa vai medir {:.3f}".format(hipotenusa))