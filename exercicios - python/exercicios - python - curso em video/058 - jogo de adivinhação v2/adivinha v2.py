from random import randint

pc = randint(0, 10)

print('-=-' * 20)
print('Vou pensar em um número entre 0 e 10. tente adivinhar...')
print('-=-' * 20)

acertou = False
tentativas = 0

while not acertou:
    player = int(input('Em que número eu pensei? '))
    tentativas += 1
    if player == pc:
        acertou = True
        print('Parabéns, você acertou! Foram necessarias {} tentativas.'.format(tentativas))
        break

    else: 
        if player < pc:
            print('O meu número é maior que {}'.format(player))
        elif player > pc:
            print('O meu número é menor que {}'.format(player))

        print('Você errou, não era {}. Tente de novo'.format(player))