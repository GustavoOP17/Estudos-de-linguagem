numero1 = int(input('Primeiro valor '))
numero2 = int(input('Segundo valor '))

print('''
[ 1 ] Somar
[ 2 ] Multiplicar
[ 3 ] Maior
[ 4 ] Novos números
[ 5 ] Sair do programa
''')

while True:
    opcao = int(input('>>>>> Qual é a sua opção? '))
    
    if opcao == 1:
        soma = numero1 + numero2
        print('A soma dos números {} e {} é {}'.format(numero1, numero2, soma))

    elif opcao == 2:
        multiplicacao = numero1 * numero2
        print('A multiplicação dos números {} e {} é {}'.format(numero1, numero2, multiplicacao))

    elif opcao == 3:
        maior = max(numero1, numero2)
        print('O maior número entre {} e {} é {}'.format(numero1, numero2, maior))

    elif opcao == 4: 
        numero1 = int(input('Primeiro valor '))
        numero2 = int(input('Segundo valor '))

    elif opcao == 5:
        print('Programa encerrado...')
        break

    else:
        print('Opção invalida.')