def fichaJogador(jogador='Desconhecido', gol=0):
    print(f'O jogador {jogador} fez {gol} gol(s) no campeonato.')

nome = input('Nome do jogador: ')
gol = input('Número de gols: ')

if gol.isnumeric():
    g = int(gol)
else:
    g = 0

if nome.strip() == '':
    fichaJogador(gol=g)
else:
    fichaJogador(nome, gol)