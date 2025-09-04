from random import randint

lista = list()
jogos = list()

print('-' * 30)
print('{:^30}'.format(' JOGA NA MEGA SENA '))
print('-' * 30)

quant = int(input('Quantos jogos você quer que eu sorteie? '))

tot = 1

while tot <= quant: 
    cont = 0

    while True:
        numero = randint(1, 60)

        if numero not in lista:
            lista.append(numero)
            cont += 1

        if cont >= 6:
            break

    lista.sort()
    jogos.append(lista[:])
    lista.clear()
    tot += 1

print('-=' * 3, f'SORTEANDO {quant} JOGOS ', '-= * 3')
for i, l in enumerate(jogos):
    print(f'Jogo {i+1}: {l}')

print('-=' * 5, '< BOA SORTE! >' '-=' * 5)