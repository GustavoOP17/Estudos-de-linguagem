from datetime import date

hoje = date.today().year
totalMaior = 0
totalMenor = 0

for pessoa in range(1, 8):
    nascimento = int(input('Em que ano a pessoa nasceu? '))
    idade = hoje - nascimento
    if idade >= 18:
        totalMaior += 1
    else:
        totalMenor += 1

print('Ao todo tivemos {} pessoas maiores de idade'.format(totalMaior))
print('E também tivemos {} pessoa menores de idade'.format(totalMenor))