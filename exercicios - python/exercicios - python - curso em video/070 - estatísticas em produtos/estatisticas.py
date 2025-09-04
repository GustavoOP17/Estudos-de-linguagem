total = maisMil = cont = maisBaratoPreco = 0
maisBaratoNome = ''
print('-' * 60)
print('{:-^60}'.format(' LOJA SUPER BARATÃO '))
print('-' * 60)

while True:
    nome = input('Nome do produto: ')
    preco = float(input('Preço do produto: '))
    
    if cont == 0 or preco < maisBaratoPreco:
        maisBaratoNome = nome
        maisBaratoPreco = preco
    
    if preco > 1000:
        maisMil += 1
    cont += 1
    total += preco

    opcao = input('Quer continuar? [S /N]').strip().upper()[0]
    while opcao not in ['S','N']:
        opcao = input('Entrada inválida. Quer continuar? [S/N]: ').strip().upper()[0]

    

    if opcao == 'N':
        break

print('{:-^60}'.format(' FIM DO PROGRAMA '))
print(f'Você comprou {cont} produtos e o total da compra foi R${total}')
print(f'Temos {maisMil} produtos custando mais de R$1000.00')
print(f'O produto mais barato foi {maisBaratoNome} que custa R${maisBaratoPreco}')
