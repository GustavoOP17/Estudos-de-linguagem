from random import randint

pc = randint(0, 5)

print('-=-' * 20)
print('Vou pensar em um número entre 0 e 5. tente adivinhar...')
print('-=-' * 20)

player = int(input('Em que número eu pensei? '))

if player == pc:
    print('Parabéns, você acertou')
else: 
    print('Você errou, não era {}, eu pensei no número {}'.format(player, pc))