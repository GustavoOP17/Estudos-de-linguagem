print('-=-' * 20)
print('Analisador de Triângulos')
print('-=-' * 20)

reta1 = float(input('Primeiro segmento: '))
reta2 = float(input('Segundo segmento: '))
reta3 = float(input('Terceiro segmento: '))

if (reta1 < reta2 + reta3) and (reta2 < reta1 + reta3) and (reta3 < reta1 + reta2):
    
    if reta1 == reta2 == reta3:
        tipo = 'EQUILÁTERO'
    elif reta1 == reta2 or reta2 == reta3 or reta1 == reta3:
        tipo = 'ISÓSCELES'
    else:
        tipo = 'ESCALENO'

    print('Os segmentos acima PODEM FORMAR triângulos {tipo}!'.format(tipo))
else:
    print('Os segmentos acima NÃO PODEM FORMAR triângulos!')