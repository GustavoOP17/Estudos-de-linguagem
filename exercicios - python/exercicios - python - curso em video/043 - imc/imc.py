peso = float(input('Qual é o seu peso? (kg) '))
altura = float(input('Qual é a sua altura? (m) '))
IMC = peso / (altura ** 2)

print('O IMC dessa pessoa é de {:.2f}'.format(IMC))

if IMC <= 18.5:
    print('Você está ABAIXO do peso')
elif IMC <= 25:
    print('Você está no peso IDEAL')
elif IMC <= 30:
    print('Você está com SOBREPESO')
elif IMC <= 40:
    print('Você está OBESO')
else:
    print('Você está com OBESIDADE MÓRBIDA')    