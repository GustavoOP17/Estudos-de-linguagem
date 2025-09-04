def maior(* numero):
    cont = maior = 0
    print('-=' * 30)
    print('\nAnalisando os valores passados... ')
    for valor in numero:
        print(f'{valor} ', end='', flush=True)
    
        if cont == 0:
            maior = numero
        else:
            if numero > maior:
                maior = numero
        
        cont -= 1
    print(f'Foram informados {cont} valores ao todo.')
    print(f'O maior valor informado foi {maior}.')
    

maior(9, 54, 5, 4)