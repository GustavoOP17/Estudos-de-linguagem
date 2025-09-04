cont = soma = 0

while True:
    numero = int(input('Digite um número [999 para parar]: '))

    if numero != 999:
        cont += 1
        soma += numero
    
    else:
        print('Você parou o programa.')
        break

print(f'Você digitou {cont} numeros e a soma deles é {soma}')