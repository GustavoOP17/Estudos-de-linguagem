def fatorial(fatorial, show=False):
    resultado = 1

    for c in range(fatorial, 0, -1):
        if show:
            print(c, end='')

            if c > 1:
                print(' x ', end='')

            else:
                print(' = ', end='')
        f *= c
    return f


fatorial = int(input('Digite um número para calcular seu fatorial: '))
print(fatorial(5, show=True))