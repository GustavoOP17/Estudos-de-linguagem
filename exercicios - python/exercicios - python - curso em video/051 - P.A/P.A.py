numero1 = int(input('Primeiro termo: '))
razao = int(input('Ração: '))
decimo = numero1 + (10 - 1) * razao

for c in range(numero1, decimo + razao, razao):
    print('{} '.format(c), end=" -> ")

print('ACABOU!!')