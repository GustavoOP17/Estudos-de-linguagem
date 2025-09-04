preco = float(input('Qual o preço do produto? '))
novo = preco - (preco * 5 / 100)
print("O produto que custava R${}, na promoção de 5% fica {}".format(preco, novo))