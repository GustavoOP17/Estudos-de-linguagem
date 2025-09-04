def sorteia(lista):
    from random import randint
    
    for c in range(0, 5):
        n = randint(0, 1000)
        lista.append(n)

        print(f'{n} ', end='', flush=True)
    print('PRONTO!')



def somaPar(lista):
    soma = 0
    for valor in lista:
        if valor % 2 == 0:
            soma += valor
    print(f'Somando os valores pares de {lista}, temos {soma}')


numeros = list()
sorteia(numeros)
somaPar(numeros)