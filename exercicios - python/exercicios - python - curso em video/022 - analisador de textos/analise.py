nome = input('Digite seu nome completo: ')
primeiro_nome = nome.split()[0].capitalize()

print('analisando seu nome...')
print('Seu nome em maiusculo é {}'.format(nome.upper()))
print('Seu nome em minúsculo é {}'.format(nome.lower()))
print('Seu nome tem ao todo {} letras'.format(len(nome)))
print('Seu primeiro nome é {} e tem {} letras'.format(primeiro_nome, len(primeiro_nome)))