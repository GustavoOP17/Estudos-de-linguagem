sexo = input('Informe seu sexo [M/F] ').split().upper()[0]
while sexo not in 'MmFf':
    sexo = input('Dados invalidos. Por favor, informe seu sexo [M/F] ').split().upper()[0]
print('Sexo {} registrado com sucesso'.format(sexo))