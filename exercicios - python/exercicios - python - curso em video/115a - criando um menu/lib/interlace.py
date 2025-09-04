def leiaInt(msg):
    ok = False
    valor = 0

    while True:
        n = input(msg)

        if n.isnumeric():
            valor = int(n)
            ok = True
        else:
            print('\033[0;31mERRO! Digite um numero valido.\033[m')
        
        if ok:
            break
    
    return valor

def linha(tam = 42):
    return '-' * tam

def cabeçalho(txt):
    print(linha())
    print(txt.center(42))
    print(linha())

def menu(lista):
    cabeçalho('MENU PRINCIPAL')
    c = 1
    for item in lista:
        print(f'\033[33m{c}\033[34m] - \033[34m{item}\033[m')
        c += 1
    print(linha())
    opcao = leiaInt('\033[32mSua opção: \033[m')
    return opcao