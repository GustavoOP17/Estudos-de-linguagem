distancia = float(input('Qual a distândcia da sua viagem? '))

if distancia > 200:
    preco = distancia * 0.50
else:
    preco = distancia * 0.45 

print('O custo da passagem para uma viagem de {} é {}'.format(distancia, preco))