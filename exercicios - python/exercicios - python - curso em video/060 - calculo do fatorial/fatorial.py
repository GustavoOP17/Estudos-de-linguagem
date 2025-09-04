fatorial = int(input('Digite um número para calcular seu fatorial: '))
resultado = 1
passo = []

for c in range(fatorial, 0, -1):
    resultado *= c
    passo.append(str(c))

passoStr = ' x '.join(passo)

print("Calculando {}! = {} = {}".format(fatorial, passoStr, resultado))