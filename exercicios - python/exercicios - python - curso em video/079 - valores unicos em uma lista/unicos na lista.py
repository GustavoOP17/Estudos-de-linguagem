lista = list()
while True:
    numero = int(input('Digite um número: '))

    if numero not in lista:
        print('Valor adicionado com sucesso...')
        lista.append(numero)
    
    else:
        print('Valor duplicado! Não vou adicionar...')

    opcao = input('Quer continuar? [S / N] ').strip().upper()[0]
    
    while opcao not in ['S', 'N']:
        opcao = input('Opção invalida. Quer continuar? [S / N] ').strip().upper()[0]
    
    if opcao == "N":
        break

print('-=' * 20)
print(f'Você digitou os valores {lista}')