from random import shuffle

n1 = input("digite o nome do primeiro aluno")
n2 = input("digite o nome do segundo aluno")
n3 = input("digite o nome do terceiro aluno")
n4 = input("digite o nome do quarto aluno")

lista = [n1, n2, n3, n4]
shuffle(lista)

print("A ordem sorteada foi")
print(lista)