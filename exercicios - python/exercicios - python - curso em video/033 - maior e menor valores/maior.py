numero1 = float(input('Digitou o primeiro número'))
numero2 = float(input('Digitou o segundo número'))
numero3 = float(input('Digitou o terceiro número'))

maior = max(numero1, numero2, numero3)
menor = min(numero1, numero2, numero3)

print('O menor valor digitado foi {}'.format(menor))
print('O maior valor digitado foi {}'.format(maior))