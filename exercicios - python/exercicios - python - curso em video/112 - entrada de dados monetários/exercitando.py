from moedario.moeda import moeda
from moedario.dados import leiaDinheiro

preco = leiaDinheiro('Digite o preço: R$')
moeda.resumo(preco, 20, 12)