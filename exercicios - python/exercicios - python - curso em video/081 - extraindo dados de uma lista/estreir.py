lista = [] 

while True:
    numero = int(input('Digite um número: '))
    lista.append(numero)

    opcao = input('Quer continuar? [S / n] ').strip().upper()[0]
    if opcao == 'N':
        break

print('-=' * 30)

print(f'Você digitou {len(lista)} elementos')
print(f'Os valores em ordem decrescente são {sorted(lista, reverse=True)}')

if 5 in lista: 
    print(f'O valor 5 FAZ parte da lista!')
else:
    print(f'O valor 5 NÃOO FAZ parte da lista!')