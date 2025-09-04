numeros = []

for c in range(5):
    numero = int(input('digite um número: '))
    numeros.append(numero)

print(f'Você digitou os números: {numeros}')
print(f'O número 9 aparteceu {numeros.count(9)} vezes')
if 3 in numeros:
    print(f'O número 3 apareceu ca {numeros.index(3) + 1}ª posição')
else:
    print('O número 3 não apareceu')
    
print(f'Os números pares digitados foram ', end='')

for n in numeros:
    if n % 2 == 0:
        print(n, end=' ')
