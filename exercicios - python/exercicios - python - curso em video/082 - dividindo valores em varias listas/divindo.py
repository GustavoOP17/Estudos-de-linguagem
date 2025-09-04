numeros = []
pares = []
impares = []

while True:
    numero = int(input('Digite um número: '))
    numeros.append(numero)

    if numero % 2 == 1:
        pares.append(numero)
    else:
        impares.append(numero)
        
    opcao = input('Quer continuar? [S / n] ').strip().upper()[0]
    while opcao not in ['S', 'N']:
        opcao = input('Opção inválida. Quer continuar? [S/N] ').strip().upper()[0]

    if opcao == 'N':
        break

print('-=' * 30)
print(f'A lista completa é {numeros}')
print(f'A lista de pares é {pares}')
print(f'A lista de impares é {impares}')
