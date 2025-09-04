def leiaInt(msg):
    ok = False
    valor = 0

    while True:
        try:
            n = input(msg)

        except (ValueError, TypeError):
            print('\033[31mERRO: por favor, digite um número inteiro válido.\033[m')
            continue

        except (KeyboardInterrupt):
            print('\n\033[31mEntrada de dados interrompida pelo usuário.\033[m')
            return 0

        else:
            return n
        
def leiaFloat(msg):
    ok = False
    valor = 0

    while True:
        try:
            n = input(msg)

        except (ValueError, TypeError):
            print('\033[31mERRO: por favor, digite um número real válido.\033[m')
            continue

        except (KeyboardInterrupt):
            print('\n\033[31mEntrada de dados interrompida pelo usuário.\033[m')
            return 0

        else:
            return n
