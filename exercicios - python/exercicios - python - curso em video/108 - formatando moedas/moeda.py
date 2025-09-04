def aumentar(preco, taxa):
    aumento = preco + (preco * taxa/100)
    return aumento

def diminuir(preco, taxa):
    desconto = preco - (preco * taxa/100)
    return diminuir

def dobro(preco):
    dobro = preco * 2
    return dobro

def metade(preco):
    metade = preco / 2
    return metade

def moeda(preco=0, moeda = "R$"):
    return f'{moeda}{preco:>8.2f}'.replace('.', ',')