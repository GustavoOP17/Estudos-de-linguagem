print('Gerador de PA')
print('-='*10)

numero1 = int(input('Primeiro termo: '))
razao = int(input('Ração: '))
decimo = numero1 + (10 - 1) * razao
termo = numero1
cont = 1

while cont <= 10:
    print('{} -> '.format(termo), end='')
    termo += razao
    cont += 1
    
print('ACABOU!!')