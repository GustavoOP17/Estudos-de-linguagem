from random import randint

print('=-' * 30)
print('VAMOS JOGAR ÍMPAR OU PAR')
print('=-' * 30)

vitorias = 0

while True:
    pc = randint(0, 10)
    numero = int(input('Digite um valor: '))
    escolha = input('Par ou ímpar? [P/I] ').strip().upper()

    while escolha not in ['P', 'I']:
        escolha = input('Escolha inválida. Digite P para Par ou I para Ímpar: ').strip().upper()

    soma = pc + numero

    if soma % 2 == 0:
        resultado = 'PAR'
    if soma % 2 == 1:
        resultado = 'IMPAR'

    print(f'Você jogou {numero} e o computador {pc}, total de {soma} DEU {resultado}')

    if resultado == 'PAR' and escolha == 'P' or resultado == 'IMPAR' and escolha == "I":
        print('Você ganhou!')
        vitorias += 1

    else:
        print('Você perdeu!')
        break

    print('Vamos jogar novamente...')

print(f'Você ganhou {vitorias} vezes seguidas!')