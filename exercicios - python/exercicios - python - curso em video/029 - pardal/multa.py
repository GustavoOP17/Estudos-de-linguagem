velocidade = int(input('Em que velocidade está o carro? '))
limite = 80
multa = (velocidade - 80) * 7

if velocidade > limite:
    print('MULTADO! Você deve para {}, o limite da via era {} e você estava a {}'.format(multa, limite, velocidade))

print('Tenha um bom dia! Dirija com segurança')