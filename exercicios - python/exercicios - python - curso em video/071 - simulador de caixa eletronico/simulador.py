print('=' * 30)
print('{:-^30}'.format(' BANCO CEV '))
print('=' * 30)

cinquenta = dez = um = 0

saque = int(input('Qual valor você quer sacar? R$'))

cinquenta = saque // 50
resto = saque % 50

dez = resto // 10
resto %= 10


um = resto // 1

if cinquenta == 0 or cinquenta == 1: 
    print(f'Total de {cinquenta} cédula de R$50')
else:
    print(f'Total de {cinquenta} cédulas de R$50')

if dez == 0 or dez == 1:
    print(f'Total de {dez} cédula de R$10')
else: 
    print(f'Total de {dez} cédulas de R$10')

if um == 0 or um == 1:
    print(f'Total de {um} cédula de R$1')
else: 
    print(f'Total de {um} cédulas de R$1')

print('=' * 30)
print('Volte sempre ao BANCO CEV! Tenha um bom dia!')