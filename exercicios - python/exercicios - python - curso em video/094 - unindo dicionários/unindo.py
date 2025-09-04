povo = list()
pessoa = dict()
soma = media = 0

while True: 
    pessoa.clear()
    pessoa['nome'] = input('Nome: ')

    while True:
        pessoa['sexo'] = input('Sexo [S / M] ').upper()[0]
        if pessoa['sexo'] in 'MF':
            break
        print('ERRO! Por favor, diite apenas M ou F.')
    pessoa['idade'] = int(input('Idade: '))
    soma += pessoa['idade']
    povo.append(pessoa.copy())

    while True: 
        opcao = input('Quer continuar? [S / N] ').upper()[0]
        if opcao in 'SN':
            break
        print('ERRO! Por favor, diite apenas S ou N. ')
    if opcao == 'S':
        break
print('-=' * 30)
print(f'A) Ao todo temos {len(povo)} pessoas cadastradas. ')
media = soma / len(povo)
print(f'B) A média de idade é de {media:5.2f} anos.')
print(f'C) As mulheres cadastradas foram ', end='')

for p in povo:
    if p['idade'] >= media:
        print('   ', end='')
        for k, v in p.items():
            print(f'{k} = {v}; ', end='')
    print()
print('<< ENCERRADO >>')