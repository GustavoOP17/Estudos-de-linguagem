import moeda
preco = float(input('Digite o preço: R$'))
taxaDesconto = int(input('Qual o valor da taxa de desconto: ')) 
taxaAumneto = int(input('Qual o valor da taxa de aumento: '))

print(f'A metade de R${preco} é R${moeda.metade(preco)}')
print(f'O dobro de R${preco} é R${moeda.dobro(preco)}')    
print(f'Com o desconto de {moeda.taxa(15)}%, o preço fica R${moeda.desconto(preco)}')
print(f'Com o aumento de {moeda.taxa(15)}%, o preço fica R${moeda.aumento(preco)}')