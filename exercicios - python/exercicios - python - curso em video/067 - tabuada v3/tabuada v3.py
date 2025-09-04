while True:
    numero = int(input('Qual número você quer ver a tabuada? Números negativos encerram o programa'))
    print('-' * 30)

    if numero < 0:
        break

    for tabuada in range(1, 11):
        print(f'{numero} x {tabuada} = {numero * tabuada}')
    print('-'*30)

print('PROGRAMA TABUADA ENCERRADO. Volte sempre')
