dias = int(input("Quandos dias alugados? "))
km = float(input("Quantos Km rodados? "))
diaCusto = 60
KmCusto = 0.15
valorPagar = (dias * diaCusto) + (km * KmCusto)
print("O total a pagar será: {:.2f} reais".format(valorPagar))