soma = 0 
for cont in range(3, 501, 3):
    if cont % 2 != 0:
        soma += cont
print("A soma dos múltiplos de 3 ímpares entre 1 e 500 é {}".format(soma))
