print('{:=^40}'.format(' LOJINHA '))

preco =float(input('Preço das compras: R$'))

print('''FORMAS DE PAGAMENTO
[ 1 ] à vista dinheiro/cheque
[ 2 ] à vista cartão
[ 3 ] 2x no cartão 
[ 4 ] 3x ou mais no cartão
''')

opcao = int(input('Qual é a opção? '))

if opcao == 1:
    total = preco - (preco * 0.10)
    print('O valor a pagar vai ser R${}'.format(total))

elif opcao == 2:
    total = preco - (preco * 0.05)
    print('O valor a pagar vai ser R${}'.format(total))

elif opcao == 3:
    total = preco / 2
    print('O valor a pagar vai ser 2 parcelas de R${}'.format(total))

elif opcao == 4:
    parcela = int(input('Quantas parcelas? '))
    total = (preco + (preco * 0.20)) / parcela
    print('O valor a pagar vai ser {} parcelas de R${}'.format(parcela, total))
    
else: 
    print('opção invalida')






