import moeda
preco = float(input('Digite o preço: R$'))
taxaDesconto = int(input('Qual o valor da taxa de desconto: ')) 
taxaAumneto = int(input('Qual o valor da taxa de aumento: '))

print(f'A metade de {moeda.moeda(preco)} é {moeda.moeda(moeda.metade(preco))}')
print(f'O dobro de {moeda.moeda(preco)} é {moeda.moeda(moeda.dobro(preco))}')
print(f'Com o desconto de {moeda.taxa(15)}%, o preço fica {moeda.moeda(moeda.desconto(preco))}')
print(f'Com o aumento de {moeda.taxa(15)}%, o preço fica {moeda.moeda(moeda.aumento(preco))}')