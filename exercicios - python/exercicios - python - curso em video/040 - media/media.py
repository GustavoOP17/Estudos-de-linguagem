nota1 = float(input('Primeira nota: '))
nota2 = float(input('Segunda nota: '))
media = (nota1 + nota2) / 2 

print('Tiarando {} e {}, a média do aluno é {:.2f}.'.format(nota1, nota2, media))

if 7 > media >= 5:
    print('Você está de RECUPERAÇÃO')

elif media < 5:
    print('Você está de REPROVADO')

elif media >= 7:
    print('Você está de APROVADO')