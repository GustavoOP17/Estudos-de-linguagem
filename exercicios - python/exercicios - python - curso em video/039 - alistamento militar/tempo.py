from datetime import date

ano = int(input('Ano de nascimento: '))
hoje = date.today().year
idade = hoje - ano

print('Quem nasceu em {} tem {} anos em {}.'.format(ano, idade, hoje))
if idade > 18:
    print('Seu ano de alsitamento foi em {}'.format((ano+18)))
elif idade == 18: 
    print('Esse é o seu ano de alistamento')
else:
    print('Ainda faltam {} anos para o alistamento'.format(18 - idade))
    print('Seu alistamento será em {}'.format(ano + 18))
