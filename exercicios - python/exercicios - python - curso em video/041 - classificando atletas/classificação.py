from datetime import date
ano = int(input("Ano de nascimento: "))
idade = date.today().year - ano

print('O atleta tem {} anos'.format(idade))

if idade <= 9:
    print('Claficação: Mirim')
elif idade <= 14:
    print('Claficação: infantil')
elif idade <= 19:
    print('Claficação: Junior')
elif idade <= 25:
    print('Claficação: Sênior')
else:
    print('Claficação: Master')