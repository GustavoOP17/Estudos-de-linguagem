numero = int(input('Qual número você quer ver a tabuada? '))

for tabuada in range(1, 11):
    print('{} x {} = {}'.format(numero, tabuada, numero * tabuada))