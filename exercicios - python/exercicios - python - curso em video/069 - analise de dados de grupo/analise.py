totalMulher20 = maior18 = homens = 0

while True:
    print('-' * 30)
    print('{:-^30}'.format(' CADASTRE UMA PESSOA '))
    print('-' * 30)
    
    idade = int(input('Idade: '))
    sexo = input('Sexo [M/F]: ').strip().upper()

    while not sexo in ['M', 'F']:
        sexo = input('Entrada inválida. Digite M ou F: ').strip().upper()

    print('-' * 30)

    if idade > 18:
        maior18 += 1

    if sexo == "M":
        homens += 1
    
    if sexo in 'F' and idade < 20:
        totalMulher20 += 1

    opcao = input('Quer continuar? [S / N] ').upper().strip()
    
    while opcao not in ['S', 'N']:
        opcao = input('Entrada inválida. Digite S ou N: ').strip().upper()

    if opcao == 'N':
        break

print(f'A quantidede de pessoas com mais de 18 anos é {maior18}')
print(f'A quantidede de homens cadastrados foi {homens}')
print(f'A quantidade de mulheres com menos de 20 anos é {totalMulher20}')