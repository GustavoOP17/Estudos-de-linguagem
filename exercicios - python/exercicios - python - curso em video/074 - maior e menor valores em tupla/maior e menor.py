from random import randint

sorteados = []

for c in range(5):
    sorteados.append(randint(1, 100))

print('Os valores sorteados foram: ', end='')
for n in sorteados:
    print(f'{n} ', end='')

print(f'O maior valor sorteado foi {max(sorteados)}')
print(f'O menor valor sorteado foi {min(sorteados)}')