somaIdade = 0 
mediaIdade = 0
nomeVelho = ''
maiorIdadeHomem = 0
totalMulher20 = 0
for p in range(1, 5):
    print('----- {}ª PESSOA -----'.format(p))
    nome = input('NOME: ')
    idade = int(input('Idade: '))
    sexo = input('Sexo [M/F]: ').strip()
    somaIdade += idade
    if p == 1 and sexo in 'Mm':
        maiorIdadeHomem = idade
        nomeVelho = nome
    if sexo in 'Mm' and idade > maiorIdadeHomem:
        maiorIdadeHomem = idade
        nomeVelho = nome 
    if sexo in 'Ff' and idade < 20:
        totalMulher20 += 1
mediaIdade = somaIdade / 4
print('A média de idade do grupo é {} anos'.format(mediaIdade))
print('O homem mais velho tem {} anos e se chama {}'.format(maiorIdadeHomem, nomeVelho))
print('A quantidade de mulheres com menos de 20 anos é {}'.format(totalMulher20))