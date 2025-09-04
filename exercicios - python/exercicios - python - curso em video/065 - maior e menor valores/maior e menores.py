maior = menor = cont = soma = media = 0

while True:
    numero = int(input('Digite um número: '))

    if cont == 0:
        maior = menor = numero
    
    else:
        if numero > maior:
            maior = numero

        if numero < menor:
            menor = numero
    
    cont += 1
    soma += numero

    opcao = input('Quer continuar? [S/N] ').strip().upper()[0]

    if opcao in "Nn":
        media = soma / cont
        print('Você digitou {} números e a média foi {:.2f}'.format(cont, media))
        print('O maior número foi {} e o menor foi {}'.format(maior, menor))
        break