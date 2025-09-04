matriz = [[0, 0, 0], [0, 0, 0], [0, 0, 0]]
somaPares = somaTerceira = maiorSegunda = 0

for l in range(0, 3):
    for c in range(0, 3):
        matriz[l][c] = int(input(f'Digite um valor para [{l}, {c}]: '))
        
        if matriz[l][c] % 2 == 0:
            somaPares += matriz[l][c]

for l in range(0, 3):
    somaTerceira += matriz[l][2]


maiorSegunda = max(matriz[1])

print('-=' * 30)

for l in range(0, 3):
    for c in range(0, 3):
        print(f'[{matriz[l][c]:^5}]', end='')  
    print()


print('-=' * 30)
print(f'A soma dos valores pares é {somaPares}')
print(f'A soma dos valores da terceira coluna é {somaTerceira}')
print(f'O maior valor da segunda linha é {maiorSegunda}')
