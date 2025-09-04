print('Gerador de PA')
print('-='*10)

numero1 = int(input('Primeiro termo: '))
razao = int(input('Ração: '))

termo = numero1
cont = 1
total = 0
mais = 10

while mais != 0:
    total += mais
    while cont <= total:
        print('{} -> '.format(termo), end='')
        termo += razao
        cont += 1
    print('ACABOU!!')

    mais = int(input('Quantos termos você quer mostrar a mais? Digite 0 para parar o programa '))

    if mais == 0:
        print('Programa encerrado')
        break

print('Progressão finalizada com {} termos mostrados.'.format(total))