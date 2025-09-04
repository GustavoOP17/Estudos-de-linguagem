salario = float(input('Qual o seu salario? '))
if salario >= 1250.00:
    aumento = salario * 1.10
    print('Se você recebia {}, com o aumento de 10% ele vai para de {} reais'.format(salario, aumento))
else:
    aumento = salario * 1.15
    print('Se você recebia {}, com o aumento de 10% ele vai para de {} reais'.format(salario, aumento))

