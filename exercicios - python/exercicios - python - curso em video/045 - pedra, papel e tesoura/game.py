from random import randint
print('''Suas opções
[ 1 ] PEDRA
[ 2 ] PAPEL
[ 3 ] TESOURA
''')
itens = ('PEDRA', 'PAPEL', 'TESOURA')

jogada = int(input('Qual é a sua jogada? ')) - 1
pc = randint(0, 2)

if jogada in (0, 1, 2):
    print('-=' * 10)
    print('Computador jogou {}'.format(itens[pc]))
    print('Jogador jogou {}'.format(itens[jogada]))
    print('-=' * 10)

    if jogada == pc:
        print('Deu EMPATE, ambos jogaram {}'.format(itens[jogada]))

    elif jogada == 0 and pc == 2 or jogada == 1 and pc == 0 or jogada == 2 and pc == 1:
        print('Você venceu! Você jogou {} e eu joguei {}'.format(itens[jogada], itens[pc]))

    elif jogada == 2 and pc == 0 or jogada == 0 and pc == 1 or jogada == 1 and pc == 2:
        print('Você perdeu! Você jogou {} e eu joguei {}'.format(itens[jogada], itens[pc]))

else: 
    print('Opção invalida')
