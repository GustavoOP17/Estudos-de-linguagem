def area(largura, comprimento):
    area = largura * comprimento
    print(f'Se a larura do terreno é {largura} e o comprimento é {comprimento} a aréa será {area}m²')

print(' Controle de Terrenos')
print('-' * 20)

l = float(input('LARGURA (m): '))
c = float(input('COMPRIMENTO (m): '))

area(l, c)