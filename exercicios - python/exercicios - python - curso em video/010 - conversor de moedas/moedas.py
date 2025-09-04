carteira = float(input("Quanto dinheiro você tem na cardeira? R$"))
contacao = 3.27 

print("Com R${} você pode comprar US${:.2f}".format(carteira, carteira / contacao))
