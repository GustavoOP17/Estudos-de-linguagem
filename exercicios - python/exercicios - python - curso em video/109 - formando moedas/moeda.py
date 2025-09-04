def aumentar(preco=0, taxa=10, formato=False):
    aumento = preco + (preco * taxa/100)
    return aumento if formato is False else moeda(preco)

def diminuir(preco=0, taxa=0, formato=False):
    desconto = preco - (preco * taxa/100)
    return desconto if formato is False else moeda(preco)

def dobro(preco=0, formato=False):
    dobro = preco * 2
    return dobro if formato is False else moeda(preco) 

def metade(preco=0, formato=False):
    metade = preco / 2
    return metade if formato is False else moeda(preco)

def moeda(preco=0, moeda = "R$"):
    return f'{moeda}{preco:>8.2f}'.replace('.', ',')