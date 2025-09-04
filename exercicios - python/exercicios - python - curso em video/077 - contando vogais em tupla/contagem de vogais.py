palavras = []

for c in range(5):
    palavra = input('Insira uma palavra: ').upper().strip()
    palavras.append(palavra)

for p in palavras:
    print(f'\nNa palavra {p} temos ', end='')
    for letra in p:
        if letra.lower() in "aeiouáéíóúâêîôûàèìòùãõäëïöü":
            print(letra, end=' ')